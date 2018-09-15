@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">List Role</div>

        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col"><a href="{{ route('admin.role.add') }}" class="text-white btn btn-success">Add</a></th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($roles as $role)
                    <tr>
                        <th scope="row">{{ $role->id }}</th>
                        <td>{{ $role->role_name }}</td>
                        <td>
                            <a class="text-white btn btn-warning" href="{{ route('admin.role.edit', $role->id) }}">Edit</a>
                            <form action="{{ route('admin.role.delete', $role->id) }}" class="d-inline-block" method="POST">
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
