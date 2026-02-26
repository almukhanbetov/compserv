@extends('layouts.app')
@section('title','Обучение')

@section('content')
<div class="max-w-6xl mx-auto px-6 py-10">
  <h1 class="text-4xl font-bold text-white">Обучение</h1>
  <p class="text-gray-300 mt-2">Выберите язык и запускайте примеры в Runner.</p>

  <div class="grid md:grid-cols-4 gap-4 mt-8">
    @foreach($languages as $lang)
      <a href="/learning/{{ $lang->slug }}"
         class="rounded-2xl bg-white/5 hover:bg-white/10 border border-white/10 p-6 transition">
        <div class="text-xl text-white font-semibold">{{ $lang->name }}</div>
        <div class="text-sm text-gray-400 mt-2">Примеры + задачи</div>
      </a>
    @endforeach
  </div>
</div>
@endsection