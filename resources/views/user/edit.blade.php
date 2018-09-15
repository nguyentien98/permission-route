@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">Edit User <b>{{ $user->email }}</b></div>

        <div class="card-body">
            <form action="{{ route('admin.user.save') }}" class="row" method="POST">
                {{ csrf_field() }}
                <input type="hidden" value="{{ $user->id }}" name="id">
                <div class="col-12 form-group">
                    <label for="">Name</label>
                    <input type="text" placeholder="Name" name="name" class="form-control" value="{{ $user->name }}">
                </div>
                <div class="col-12 form-group">
                    <label for="">Email</label>
                    <input type="text" placeholder="Name" name="email" class="form-control" value="{{ $user->email }}">
                </div>
                <div class="alert alert-success col-12 text-center">
                    Role
                </div>
                @foreach ($roles as $role)
                    <div class="form-group col-3">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="role_id" id="{{ $role->id }}" value="{{ $role->id }}" 
                            @if ($role->id == $user->role_id)
                                checked
                            @endif
                            >
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
