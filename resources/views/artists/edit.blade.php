@extends('layout')

@section('main')

<div class="container">
    <h1>Update Artist</h1>
    <form method="POST" action="/artists/{{ $artist->slug }}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="">Artist Name</label>
            <input class="form-control" name="name" type="text" value="{{ $artist->name }}" required>
            @error('name')
                <p class="alert alert-danger">{{ $errors->first('name')}}</p>
            @enderror
        </div>

        <div class="form-group">
            <label for="">Artist Slug</label>
            <input class="form-control" name="slug" type="text" value="{{ $artist->slug }}" required>
            @error('slug')
                <p class="alert alert-danger  alert-danger">{{ $errors->first('slug') }}</p>
            @enderror
        </div>

        <button class="btn btn-primary" type="submit">Save Artist</button>
    </form>
</div>

@endsection