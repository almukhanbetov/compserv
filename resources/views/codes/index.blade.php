@extends('layouts.app')
@section('content')
<h1>Мои сохранённые решения</h1>

@foreach($codes as $code)

<div style="border:1px solid #ccc; margin:20px; padding:10px;">

    <h3>Lesson ID: {{ $code->lesson_id }}</h3>

    <pre>
    <code class="language-go">
    {{ $code->code }}
    </code>
        </pre>

    </div>

@endforeach

@endsection