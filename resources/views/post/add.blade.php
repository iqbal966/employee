@extends('layouts.app')

@section('content')
<h1>Add New Post</h1>
@if($errors->any())
<div class="alert alert-danger">
    @foreach($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
</div>
@endif
<form action="/add" method="POST" autocomplete="off">
    @csrf

    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Title</label>
        <div class="col-sm-10">
            <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}">
            @error('title')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Body</label>
        <div class="col-sm-10">
            <textarea class="form-control @error('body') is-invalid @enderror" cols="30" rows="10" name="body">{{ old('body') }}</textarea>
            @error('body')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
    </div>

    <div class="text-right">
        <button class="btn btn-primary">SUBMIT</button>
    </div>
</form>
@endsection
