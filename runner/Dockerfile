FROM golang:1.26-alpine
WORKDIR /app
RUN apk add --no-cache docker-cli
COPY main.go .
RUN go mod init runner && go get github.com/gin-gonic/gin && go build -o runner main.go
EXPOSE 8081
CMD ["./runner"]