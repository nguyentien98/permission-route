@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">Edit Post</div>

        <div class="card-body">
            <form action="{{ route('admin.post.save') }}" class="row" method="POST">
                {{ csrf_field() }}
                <input type="hidden" value="{{ $post->id }}" name="id">
                <div class="col-12 form-group">
                    <input type="text" placeholder="Title" name="title" class="form-control" value="{{ $post->title }}">
                </div>
                <div class="col-12 text-center">
                    <button type="submit" class="btn btn-success w-50">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
