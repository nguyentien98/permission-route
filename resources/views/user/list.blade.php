@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">List User</div>

        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Role</th>
                        <th scope="col"><a href="{{ route('admin.user.add') }}" class="text-white btn btn-success">Add</a></th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($users as $user)
                    <tr>
                        <th scope="row">{{ $user->id }}</th>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            @if ($user->role)
                                {{ $user->role->role_name }}
                            @else
                                Inactive
                            @endif
                        </td>
                        <td>
                            <a class="text-white btn btn-warning" href="{{ route('admin.user.edit', $user->id) }}">Edit</a>
                            <form action="{{ route('admin.user.delete', $user->id) }}" class="d-inline-block" method="POST">
                                {!! method_field('delete') !!}
                                {{ csrf_field() }}
                                <button type="submit" class="text-white btn btn-danger" onclick="return confirm('Delete?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
