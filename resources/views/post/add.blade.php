@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">Add Post</div>

        <div class="card-body">
            <form action="{{ route('admin.post.save') }}" class="row" method="POST">
                {{ csrf_field() }}
                <div class="col-12 form-group">
                    <input type="text" placeholder="Title" name="title" class="form-control">
                </div>
                <div class="col-12 text-center">
                    <button type="submit" class="btn btn-success w-50">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
