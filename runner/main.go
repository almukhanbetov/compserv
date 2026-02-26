package main
import (
	"context"
	"fmt"	
	"os"
	"os/exec"
	"path/filepath"
	"strings"
	"time"
	"github.com/gin-gonic/gin"
)
type RunRequest struct {
	Language string `json:"language"`
	Code     string `json:"code"`
}
type TestCase struct {
	// простой формат: ожидаемый stdout
	Expected string `json:"expected"`
	// можно расширить: input/output, args, etc.
}
type CheckRequest struct {
	Language string     `json:"language"`
	Code     string     `json:"code"`
	Tests    []TestCase `json:"tests"`
}
type RunResponse struct {
	Output string `json:"output"`
	Error  string `json:"error,omitempty"`
}
type CheckResponse struct {
	Passed bool   `json:"passed"`
	Reason string `json:"reason,omitempty"`
	Output string `json:"output,omitempty"`
	Error  string `json:"error,omitempty"`
}
func main() {
	r := gin.Default()
	r.POST("/run", func(c *gin.Context) {
		var req RunRequest
		if err := c.BindJSON(&req); err != nil {
			c.JSON(400, gin.H{"error": "bad json"})
			return
		}
		out, runErr := runInDocker(req.Language, req.Code)
		resp := RunResponse{Output: out}
		if runErr != "" {
			resp.Error = runErr
		}
		c.JSON(200, resp)
	})
	r.POST("/check", func(c *gin.Context) {
		var req CheckRequest
		if err := c.BindJSON(&req); err != nil {
			c.JSON(400, gin.H{"error": "bad json"})
			return
		}
		if len(req.Tests) == 0 {
			c.JSON(200, CheckResponse{Passed: false, Reason: "no tests"})
			return
		}
		out, runErr := runInDocker(req.Language, req.Code)
		if runErr != "" {
			c.JSON(200, CheckResponse{Passed: false, Error: runErr, Output: out})
			return
		}
		got := strings.TrimSpace(out)
		exp := strings.TrimSpace(req.Tests[0].Expected)
		if got == exp {
			c.JSON(200, CheckResponse{Passed: true, Output: out})
		} else {
			c.JSON(200, CheckResponse{Passed: false, Reason: fmt.Sprintf("expected '%s' got '%s'", exp, got), Output: out})
		}
	})
	r.Run(":8081")
}
func runInDocker(lang, code string) (string, string) {
	lang = strings.ToLower(strings.TrimSpace(lang))
	if lang == "c++" {
		lang = "cpp"
	}
	// whitelist
	allowed := map[string]bool{"go": true, "php": true, "python": true, "cpp": true}
	if !allowed[lang] {
		return "", "unsupported language"
	}
	tmpDir, err := os.MkdirTemp("", "runner-*")
	if err != nil {
		return "", "tmp error"
	}
	defer os.RemoveAll(tmpDir)
	fileName, image, cmd := buildSpec(lang)
	fullPath := filepath.Join(tmpDir, fileName)
	if err := os.WriteFile(fullPath, []byte(code), 0644); err != nil {
		return "", "write error"
	}
	ctx, cancel := context.WithTimeout(context.Background(), 6*time.Second)
	defer cancel()
	// docker run
	args := []string{
		"run", "--rm",
		"--network", "none",
		"--memory", "256m",
		"--cpus", "0.5",
		"-v", tmpDir + ":/app",
		image,
	}
	args = append(args, cmd...)

	ex := exec.CommandContext(ctx, "docker", args...)
	out, e := ex.CombinedOutput()

	if ctx.Err() == context.DeadlineExceeded {
		return string(out), "timeout"
	}
	if e != nil {
		return string(out), e.Error()
	}
	return string(out), ""
}

func buildSpec(lang string) (file string, image string, cmd []string) {
	switch lang {
	case "go":
		return "main.go", "golang:1.22", []string{"sh", "-lc", "go run /app/main.go"}
	case "php":
		return "main.php", "php:8.3-cli", []string{"php", "/app/main.php"}
	case "python":
		return "main.py", "python:3.12", []string{"python", "/app/main.py"}
	case "cpp":
		// compile + run
		return "main.cpp", "gcc:latest", []string{"sh", "-lc", "g++ /app/main.cpp -O2 -o /app/a && /app/a"}
	default:
		return "main.txt", "alpine:latest", []string{"sh", "-lc", "echo unsupported"}
	}
}