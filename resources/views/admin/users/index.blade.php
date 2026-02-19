@extends('layouts.admin')

@section('content')

<div class="p-6">
    <h1 class="text-2xl font-bold mb-6">Users</h1>

    <table class="w-full bg-gray-800 rounded">
        <thead>
            <tr class="text-left border-b border-gray-700">
                <th class="p-3">Name</th>
                <th>Email</th>
                <th>Role</th>
                <th></th>
            </tr>
        </thead>

        <tbody>
        @foreach($users as $user)
            <tr class="border-b border-gray-700">
                <td class="p-3">{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->role }}</td>
                <td>
                    <a href="{{ route('admin.users.edit',$user) }}"
                       class="text-orange-400">
                        Edit
                    </a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

@endsection
