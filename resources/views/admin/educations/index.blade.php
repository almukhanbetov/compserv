@extends('layouts.admin')

@section('content')

<div class="flex justify-between items-center mb-6">
    <h1 class="text-2xl font-bold text-white">Educations</h1>

    <a href="{{ route('educations.create') }}"
       class="bg-orange-600 hover:bg-orange-700 text-white px-4 py-2 rounded-lg">
        + Add Education
    </a>
</div>

<div class="space-y-4">

@foreach($educations as $education)

    <div class="bg-gray-900 border border-gray-700 rounded-lg shadow">

        {{-- HEADER --}}
        <div class="flex justify-between items-center p-4 cursor-pointer"
             onclick="toggleLessons({{ $education->id }})">

            <div>
                <h2 class="text-lg font-semibold text-white">
                    {{ $education->title }}
                </h2>

                <div class="text-sm text-gray-400">
                    Category:
                    <span class="text-orange-400">
                        {{ $education->category->name ?? '—' }}
                    </span>
                </div>

                <div class="text-sm text-gray-400">
                    Price:
                    <span class="text-green-400">
                        ${{ $education->price ?? 0 }}
                    </span>
                </div>
            </div>

            <div class="flex items-center gap-4">

                @if($education->is_active)
                    <span class="bg-green-600 text-white text-xs px-3 py-1 rounded">
                        Active
                    </span>
                @else
                    <span class="bg-red-600 text-white text-xs px-3 py-1 rounded">
                        Inactive
                    </span>
                @endif

                <a href="{{ route('educations.edit', $education) }}"
                   class="text-blue-400 hover:text-blue-300 text-sm">
                    Edit
                </a>

                <form action="{{ route('educations.destroy', $education) }}"
                      method="POST"
                      onsubmit="return confirm('Delete this education?')">
                    @csrf
                    @method('DELETE')
                    <button class="text-red-500 hover:text-red-400 text-sm">
                        Delete
                    </button>
                </form>

            </div>
        </div>

        {{-- LESSONS BLOCK --}}
        <div id="lessons-{{ $education->id }}"
             class="hidden border-t border-gray-800 bg-gray-800 p-4">

            <div class="flex justify-between items-center mb-3">
                <h3 class="text-sm font-bold text-gray-300">
                    Lessons (Drag to reorder)
                </h3>

                <a href="{{ route('lessons.create', ['education_id'=>$education->id]) }}"
                   class="text-xs bg-orange-600 px-3 py-1 rounded text-white">
                    + Add Lesson
                </a>
            </div>

            @if($education->lessons->count())

                <div class="lesson-container space-y-2"
                     data-education="{{ $education->id }}">

                    @foreach($education->lessons as $lesson)

                        <div class="lesson-item"
                             data-id="{{ $lesson->id }}">

                            <div class="flex justify-between items-center
                                        bg-gray-900 p-3 rounded
                                        border border-gray-700
                                        cursor-move">

                                <div class="flex items-center gap-3">
                                    <span class="text-gray-400">
                                        ⠿
                                    </span>

                                    <span class="text-white text-sm">
                                        {{ $lesson->title }}
                                    </span>
                                </div>

                                <div class="flex items-center gap-4">

                                    @if($lesson->is_active)
                                        <span class="text-green-400 text-xs">
                                            Active
                                        </span>
                                    @else
                                        <span class="text-red-400 text-xs">
                                            Inactive
                                        </span>
                                    @endif

                                    <a href="{{ route('lessons.edit', $lesson) }}"
                                       class="text-blue-400 text-xs">
                                        Edit
                                    </a>

                                </div>

                            </div>

                        </div>

                    @endforeach

                </div>

            @else
                <div class="text-gray-500 text-sm">
                    No lessons yet.
                </div>
            @endif

        </div>

    </div>

@endforeach

</div>

@endsection



@section('scripts')

<script src="https://cdn.jsdelivr.net/npm/sortablejs@1.15.0/Sortable.min.js"></script>

<script>

function toggleLessons(id) {
    const el = document.getElementById('lessons-' + id);
    el.classList.toggle('hidden');
}

// Drag & Drop for lessons
document.querySelectorAll('.lesson-container')
    .forEach(container => {

        new Sortable(container, {
            animation: 150,

            onEnd: function () {

                let order = [];

                container.querySelectorAll('.lesson-item')
                    .forEach(el => {
                        order.push(el.dataset.id);
                    });

                fetch("{{ route('lessons.reorder') }}", {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    body: JSON.stringify({ order: order })
                });

            }
        });

});
</script>

@endsection
