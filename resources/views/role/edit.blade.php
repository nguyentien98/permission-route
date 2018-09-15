@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">Edit Role <b>{{ $role->role_name }}</b></div>

        <div class="card-body">
            <form action="{{ route('admin.role.save') }}" class="row" method="POST">
                {{ csrf_field() }}
                <input type="hidden" value="{{ $role->id }}" name="id">
                <div class="col-12 form-group">
                    <input type="text" placeholder="Role Name" name="role_name" class="form-control" value="{{ $role->role_name }}">
                </div>
                <div class="alert alert-success col-12 text-center">
                    Permission
                </div>
                @foreach ($saved_routes as $route)
                    <div class="form-group col-3">
                        <div class="form-check">
                            <input name="routes[]" class="form-check-input" type="checkbox" value="{{ $route->id }}" id="{{ $route->route_name }}"
                            @if (in_array($route->id, $role->getPermissions()))
                                checked="" 
                            @endif
                            >
                            <label class="form-check-label" for="{{ $route->route_name }}">
                                {{ $route->route_name }}
                            </label>
                        </div>
                    </div>
                @endforeach
                <div class="col-12 text-center">
                    <button type="submit" class="btn btn-success w-50">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
