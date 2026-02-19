@extends('layouts.admin')

@section('content')
    <div class="p-6">

        <h1 class="text-2xl font-bold mb-6">
            Категории
        </h1>

        {{-- 🔥 ЭТО КОНТЕЙНЕР ДЛЯ DRAG --}}
        <div id="tree" class="space-y-2">
            @foreach ($categories as $category)
                @include('admin.categories.partials.node', [
                    'category' => $category,
                    'level' => 0,
                ])
            @endforeach
        </div>

    </div>
    @push('scripts')
        <script src="https://cdn.jsdelivr.net/npm/sortablejs@1.15.0/Sortable.min.js"></script>

        <script>
            new Sortable(document.getElementById('tree'), {
                animation: 150,

                onEnd: function() {

                    let order = [];

                    document.querySelectorAll('#tree > div')
                        .forEach(el => {
                            order.push(el.dataset.id);
                        });

                    fetch("{{ route('admin.categories.reorder') }}", {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        },
                        body: JSON.stringify({
                            order
                        })
                    });
                }
            });
        </script>
    @endpush
@endsection
