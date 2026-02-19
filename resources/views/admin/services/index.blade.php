@extends('layouts.app')

@section('content')
<div class="container">

    <a href="{{ route('admin.services.create') }}" class="btn btn-primary mb-3">
        + Create Service
    </a>

    <table class="table">
        <thead>
            <tr>
                <th>Title</th>
                <th>Category</th>
                <th>Price</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($services as $service)
                <tr>
                    <td>{{ $service->title }}</td>
                    <td>{{ $service->category?->name }}</td>
                    <td>{{ $service->price }}</td>
                    <td>
                        <a href="{{ route('admin.services.edit',$service) }}">Edit</a>
                        <form method="POST" action="{{ route('admin.services.destroy',$service) }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $services->links() }}

</div>
@endsection
