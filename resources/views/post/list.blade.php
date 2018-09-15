@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">List Post</div>

        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col"><a href="{{ route('admin.post.add') }}" class="text-white btn btn-success">Add</a></th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <th scope="row">{{ $post->id }}</th>
                        <td>{{ $post->title }}</td>
                        <td>
                            <a class="text-white btn btn-warning" href="{{ route('admin.post.edit', $post->id) }}">Edit</a>
                            <form action="{{ route('admin.post.delete', $post->id) }}" class="d-inline-block" method="POST">
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
