@extends('layouts.app')
@section('title','Runner '.$language->name)
@section('content')
<div class="max-w-6xl mx-auto px-6 py-10">
  <div class="flex items-center justify-between">
    <div>
      <h1 class="text-3xl font-bold text-white">Runner: {{ $language->name }}</h1>
      <p class="text-gray-400 mt-1">Код вставляется из примеров/задач.</p>
    </div>
    <div class="flex gap-2">
      <button id="runBtn" class="px-5 py-2 rounded-full bg-blue-600 text-white">▶ Run</button>
      <button id="checkBtn" class="px-5 py-2 rounded-full bg-emerald-600 text-white">✅ Check</button>
    </div>
  </div>
  <div class="mt-6 rounded-2xl overflow-hidden border border-white/10">
    <div id="editor" style="height:420px;"></div>
  </div>
  <div class="mt-6 grid md:grid-cols-2 gap-6">
    <div class="rounded-2xl bg-white/5 border border-white/10 p-5">
      <h3 class="text-white font-semibold">Output</h3>
      <pre id="out" class="text-gray-200 mt-3 whitespace-pre-wrap"></pre>
    </div>
    <div class="rounded-2xl bg-white/5 border border-white/10 p-5">
      <h3 class="text-white font-semibold">Status</h3>
      <div id="status" class="text-gray-200 mt-3">—</div>
    </div>
  </div>
</div>
@endsection
@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/monaco-editor@0.49.0/min/vs/loader.js"></script>
<script>
const langSlug = @json($language->slug);
const params = new URLSearchParams(window.location.search);
const programId = params.get('program');
const taskId = params.get('task');
let editor;
let currentTask = null;
require.config({ paths: { vs: 'https://cdn.jsdelivr.net/npm/monaco-editor@0.49.0/min/vs' }});
require(['vs/editor/editor.main'], async function () {
  editor = monaco.editor.create(document.getElementById('editor'), {
    value: '',
    language: (langSlug === 'cpp' ? 'cpp' : langSlug),
    theme: 'vs-dark',
    fontSize: 14,
    minimap: { enabled: false }
  });
  if (programId) {
    const p = await fetch('/api/program/' + programId).then(r=>r.json());
    editor.setValue(p.code);
  }
  if (taskId) {
    const t = await fetch('/api/task/' + taskId).then(r=>r.json());
    currentTask = t;
    editor.setValue(t.starter_code || '');
    document.getElementById('status').innerText = 'Задача: ' + t.title;
  }
});
document.getElementById('runBtn').onclick = async () => {
  setStatus('Running...');
  const res = await fetch('/api/run', {
    method:'POST', headers:{'Content-Type':'application/json'},
    body: JSON.stringify({ language: langSlug, code: editor.getValue() })
  }).then(r=>r.json());
  document.getElementById('out').innerText = res.output || '';
  setStatus(res.error ? ('Error: ' + res.error) : 'OK');
};
document.getElementById('checkBtn').onclick = async () => {
  if (!currentTask) { setStatus('Нет выбранной задачи'); return; }
  setStatus('Checking...');
  const res = await fetch('/api/check', {
    method:'POST', headers:{'Content-Type':'application/json'},
    body: JSON.stringify({
      language: langSlug,
      code: editor.getValue(),
      tests: currentTask.tests_json
    })
  }).then(r=>r.json());

  document.getElementById('out').innerText = res.output || '';
  setStatus(res.passed ? '✅ PASSED' : '❌ FAILED: ' + (res.reason || ''));
};

function setStatus(t){ document.getElementById('status').innerText = t; }
</script>
@endsection