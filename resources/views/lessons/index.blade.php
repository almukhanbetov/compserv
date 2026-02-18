@extends('layouts.app')
@section('content')

<h1>Уроки Go</h1>

@foreach($lessons as $lesson)
    <div>
        <a href="/lessons/{{ $lesson->id }}">
            {{ $lesson->title }}
        </a>
    </div>
@endforeach

@endsection
