<h2>{{ $lesson->title }}</h2>

<p>{{ $lesson->description }}</p>

<!-- Код урока -->
<pre><code class="language-go">
{{ $lesson->code }}
</code></pre>

<hr>

<h3>Повторить код</h3>

<textarea id="editor" style="width:100%;height:300px;">
{{ $lesson->code }}
</textarea>

<br><br>

<button onclick="runCode()">Run</button>

@if(auth()->check())
<form method="POST" action="/save-code">
    @csrf
    <input type="hidden" name="code" id="saveCode">
    <button type="submit" onclick="save()">Сохранить</button>
</form>
@endif

<pre id="output"></pre>
