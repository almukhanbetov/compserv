@extends('layouts.admin')

@section('content')

<div class="p-6 max-w-md">
    <h1 class="text-xl font-bold mb-4">
        Изменить роль
    </h1>

    <form method="POST"
          action="{{ route('admin.users.update',$user) }}">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label class="block mb-2">Role</label>

            <select name="role"
                    class="w-full bg-gray-800 p-2 rounded">

                <option value="user"
                    {{ $user->role=='user'?'selected':'' }}>
                    User
                </option>

                <option value="admin"
                    {{ $user->role=='admin'?'selected':'' }}>
                    Admin
                </option>

                <option value="teacher"
                    {{ $user->role=='teacher'?'selected':'' }}>
                    Teacher
                </option>

            </select>
        </div>

        <button class="bg-orange-600 px-4 py-2 rounded">
            Сохранить
        </button>
    </form>
</div>

@endsection
