<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Online Editor</title>

    <style>
        body { margin:0; }
        #editor { height:90vh; }
        .topbar {
            background:#1e1e1e;
            padding:10px;
        }
        input, button {
            padding:5px;
        }
    </style>
</head>
<body>

<div class="topbar">
    <input id="filename" value="test.php">
    <button onclick="loadFile()">Load</button>
    <button onclick="saveFile()">Save</button>
</div>

<div id="editor"></div>

<script src="https://unpkg.com/monaco-editor@0.45.0/min/vs/loader.js"></script>

<script>
require.config({
    paths: { vs: 'https://unpkg.com/monaco-editor@0.45.0/min/vs' }
});

require(['vs/editor/editor.main'], function () {

    window.editor = monaco.editor.create(
        document.getElementById('editor'),
        {
            value: "<?php\n\n// Start coding...",
            language: "php",
            theme: "vs-dark",
            automaticLayout: true
        }
    );
});

function loadFile() {
    fetch('/load', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': '{{ csrf_token() }}'
        },
        body: JSON.stringify({
            filename: document.getElementById('filename').value
        })
    })
    .then(r => r.json())
    .then(data => {
        editor.setValue(data.content);
    });
}

function saveFile() {
    fetch('/save', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': '{{ csrf_token() }}'
        },
        body: JSON.stringify({
            filename: document.getElementById('filename').value,
            content: editor.getValue()
        })
    });
}
</script>

</body>
</html>
