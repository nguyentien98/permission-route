@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">List Route</div>

        <div class="card-body">
            <form action="{{ route('admin.permission.save') }}" class="row" method="POST">
                {{ csrf_field() }}
                @foreach ($all_routes as $route)
                    <div class="form-group col-3">
                        <div class="form-check">
                            <input name="routes[]" class="form-check-input" type="checkbox" value="{{ $route }}" id="{{ $route }}"
                            @if (in_array($route, $saved_routes))
                                checked="" 
                            @endif
                            >
                            <label class="form-check-label" for="{{ $route }}">
                                {{ $route }}
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
