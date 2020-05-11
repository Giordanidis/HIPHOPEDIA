@extends('layout')

@section('main')

<div class="container">
    <h1>Create Artist</h1>
    <form method="POST" action="/artists">
        @csrf
        <div class="form-group">
            <label for="">Artist Name</label>
            <input
                class="form-control @error('name') form-control-highlight @enderror"
                name="name"
                type="text"
                value="{{ old('name') }}"
                required>
            @error('name')
                <p class="alert alert-danger">{{ $errors->first('name')}}</p>
            @enderror
        </div>

        <div class="form-group">
            <label for="">Artist Slug</label>
            <input
                class="form-control @error('slug') form-control-highlight @enderror"
                name="slug"
                type="text"
                value="{{ old('slug') }}"
                required>
            @error('slug')
                <p class="alert alert-danger  alert-danger">{{ $errors->first('slug') }}</p>
            @enderror
        </div>

        <button class="btn btn-primary" type="submit">Create Artist</button>
    </form>
</div>

@endsection