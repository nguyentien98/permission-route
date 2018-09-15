@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">Add Role</div>

        <div class="card-body">
            <form action="{{ route('admin.role.save') }}" class="row" method="POST">
                {{ csrf_field() }}
                <div class="col-12 form-group">
                    <input type="text" placeholder="Role Name" name="role_name" class="form-control">
                </div>
                <div class="alert alert-success col-12 text-center">
                    Permission
                </div>
                @foreach ($saved_routes as $route)
                    <div class="form-group col-3">
                        <div class="form-check">
                            <input name="routes[]" class="form-check-input" type="checkbox" value="{{ $route->id }}" id="{{ $route->route_name }}">
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
