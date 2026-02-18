<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<style>
body {
    margin:0;
    height:100vh;
    display:flex;
    flex-direction:column;
}

/* TOPBAR */
.topbar {
    background:#1e1e1e;
    color:white;
    padding:8px;
    display:flex;
    gap:10px;
}

/* MAIN */
.main {
    flex:1;
    display:flex;
}

/* PANELS */
#editor {
    width:50%;
    height:100%;
}

#preview {
    width:50%;
    border:none;
    background:white;
}
</style>
</head>

<body>

<!-- TOPBAR -->
<div class="topbar">

    <input id="filename" value="test.php">

    <button onclick="loadFile()">Load</button>
    <button onclick="saveFile()">Save</button>
    <button onclick="runCode()">▶ Run</button>

</div>

<!-- PANELS -->
<div class="main">

    <div id="editor"></div>

    <iframe id="preview"></iframe>

</div>
<script src="https://unpkg.com/monaco-editor@0.45.0/min/vs/loader.js"></script>

<script>
require.config({
    paths: { vs: 'https://unpkg.com/monaco-editor@0.45.0/min/vs' }
});

require(['vs/editor/editor.main'], function () {

    window.editor = monaco.editor.create(
        document.getElementById('editor'),
        {
            value: "<?php\n\necho 'Hello World';",
            language: "php",
            theme: "vs-dark",
            automaticLayout: true
        }
    );
});
</script>
