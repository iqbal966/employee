@extends('layouts.app')

@section('content')
@auth
<h1>Hello, {{ auth()->user()->name }}</h1>
<a class="btn btn-success" href="/add">ADD</a>
@endauth

<form class="d-flex justify-content-between align-items-end mb-4">
    <div>Total : {{ $posts->total() }} {{ Str::plural('record', $posts->total()) }}</div>

    <div class="form-group m-0">
        <div class="input-group">
            <input type="text" name="search" class="form-control" value="{{ request('search') }}">
            <div class="input-group-append">
                <button class="btn btn-primary">Search</button>
            </div>
        </div>
    </div>
</form>

@forelse ($posts as $post)
<div class="card mb-2">
    <div class="card-header d-flex justify-content-between">
        {{ $post->title }} <small>{{ $post->created_at->format('d/m/Y H:i:a') }}</small>
    </div>
    <div class="card-body">
        {{ $post->body }}
    </div>
</div>
@empty
<div class="alert alert-warning">No record.</div>
@endforelse

{{ $posts->links() }}
@endsection
