@php
$padding = $level * 20;
@endphp

<div data-id="{{ $category->id }}"
     class="border border-gray-700 rounded bg-gray-900 mb-2"
     style="margin-left: {{ $padding }}px;">

    <div class="flex justify-between items-center p-3 bg-gray-800">

        <div class="flex items-center gap-3">
            <span class="font-semibold text-white">
                {{ $category->name }}
            </span>

            <span class="text-xs px-2 py-1 rounded
                {{ $category->type=='service'
                    ? 'bg-blue-700 text-blue-100'
                    : 'bg-green-700 text-green-100' }}">
                {{ $category->type }}
            </span>

            @if(!$category->is_active)
                <span class="text-xs bg-red-600 px-2 py-1 rounded">
                    inactive
                </span>
            @endif
        </div>

        <div class="flex items-center gap-3">

            {{-- Toggle --}}
            <button
                onclick="toggleCategory({{ $category->id }})"
                class="text-sm text-yellow-400">
                Toggle
            </button>

            <a href="{{ route('admin.categories.edit',$category) }}"
               class="text-blue-400 text-sm">
                Edit
            </a>

            <form method="POST"
                  action="{{ route('admin.categories.destroy',$category) }}">
                @csrf
                @method('DELETE')
                <button class="text-red-400 text-sm">
                    Delete
                </button>
            </form>

        </div>
    </div>

    <div class="p-3 space-y-2">

        {{-- SERVICES --}}
        @foreach($category->services as $service)
            <div class="ml-4 p-2 bg-blue-900/40 rounded text-sm flex justify-between">
                <span>🛠 {{ $service->title }}</span>
                <span class="text-blue-300 font-semibold">
                    ${{ $service->price }}
                </span>
            </div>
        @endforeach

        {{-- EDUCATIONS --}}
        @foreach($category->educations as $education)
            <div class="ml-4 p-2 bg-green-900/40 rounded text-sm flex justify-between">
                <span>🎓 {{ $education->title }}</span>
                <span class="text-green-300 font-semibold">
                    ${{ $education->price }}
                </span>
            </div>
        @endforeach

        {{-- CHILDREN --}}
        @foreach($category->children as $child)
            @include('admin.categories.partials.node', [
                'category'=>$child,
                'level'=>$level+1
            ])
        @endforeach

    </div>
</div>
