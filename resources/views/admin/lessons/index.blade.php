@extends('layouts.admin')

@section('content')

<h2 class="text-xl font-bold mb-4">Lessons</h2>

<a href="{{ route('lessons.create') }}" 
   class="bg-orange-500 text-white px-4 py-2 rounded mb-4 inline-block">
    + Add Lesson
</a>

<table class="w-full border mt-4">
    <thead>
        <tr class="bg-gray-800 text-white">
            <th class="p-2">Title</th>
            <th>Course</th>
            <th>Position</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach($lessons as $lesson)
        <tr class="border-b">
            <td class="p-2">{{ $lesson->title }}</td>
            <td>{{ $lesson->education->title }}</td>
            <td>{{ $lesson->position }}</td>
            <td>
                <a href="{{ route('lessons.edit', $lesson) }}" 
                   class="text-blue-500">Edit</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection
