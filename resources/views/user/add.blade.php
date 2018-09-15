@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">Add User</div>

        <div class="card-body">
            <form action="{{ route('admin.user.save') }}" class="row" method="POST">
                {{ csrf_field() }}
                <div class="col-12 form-group">
                    <label for="">Name</label>
                    <input type="text" placeholder="Name" name="name" class="form-control">
                </div>
                <div class="col-12 form-group">
                    <label for="">Email</label>
                    <input type="text" placeholder="Email" name="email" class="form-control">
                </div>
                <div class="col-12 form-group">
                    <label for="">Password</label>
                    <input type="password" placeholder="Password" name="password" class="form-control">
                </div>
                <div class="alert alert-success col-12 text-center">
                    Role
                </div>
                @foreach ($roles as $role)
                    <div class="form-group col-3">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="role_id" id="{{ $role->id }}" value="{{ $role->id }}">
                            <label class="form-check-label" for="{{ $role->id }}">
                                {{ $role->role_name }}
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
