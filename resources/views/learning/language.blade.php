@extends('layouts.app')
@section('title',$language->name)

@section('content')
<div class="max-w-6xl mx-auto px-6 py-10">
  <div class="flex items-center justify-between">
    <div>
      <h1 class="text-3xl font-bold text-white">{{ $language->name }}</h1>
      <p class="text-gray-400 mt-1">Выберите пример или задачу → открой в Runner.</p>
    </div>
    <a href="/learning/{{ $language->slug }}/runner"
       class="px-5 py-2 rounded-full bg-blue-600 text-white hover:bg-blue-500 transition">
      Открыть Runner
    </a>
  </div>

  <div class="grid md:grid-cols-2 gap-6 mt-8">
    <div class="rounded-2xl bg-white/5 border border-white/10 p-5">
      <h3 class="text-white font-semibold text-lg">Примеры кода</h3>
      <div class="mt-4 space-y-3">
        @foreach($programs as $p)
          <div class="flex items-center justify-between bg-black/30 border border-white/10 rounded-xl p-4">
            <div class="text-white">{{ $p->title }}</div>
            <a href="/learning/{{ $language->slug }}/runner?program={{ $p->id }}"
               class="text-sm px-3 py-1 rounded-lg bg-blue-600 text-white">В Runner</a>
          </div>
        @endforeach
      </div>
    </div>

    <div class="rounded-2xl bg-white/5 border border-white/10 p-5">
      <h3 class="text-white font-semibold text-lg">Задачи (автопроверка)</h3>
      <div class="mt-4 space-y-3">
        @foreach($tasks as $t)
          <div class="flex items-center justify-between bg-black/30 border border-white/10 rounded-xl p-4">
            <div class="text-white">{{ $t->title }}</div>
            <a href="/learning/{{ $language->slug }}/runner?task={{ $t->id }}"
               class="text-sm px-3 py-1 rounded-lg bg-emerald-600 text-white">Решать</a>
          </div>
        @endforeach
      </div>
    </div>
  </div>
</div>
@endsection