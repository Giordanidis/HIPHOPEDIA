@extends('layout')

@section('main')

<div class="container">
    <h1>Create Album</h1>
    <form method="POST" action="/albums">
        @csrf
        <div class="form-group">
            <label for="">Album Title</label>
            <input
                class="form-control @error('title') form-control-highlight @enderror"
                name="title"
                type="text"
                value="{{ old('title') }}"
                required>
            @error('title')
                <p class="alert alert-danger">{{ $errors->first('title')}}</p>
            @enderror
        </div>

        <div class="form-group">
            <label for="">Album Slug</label>
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

        <div class="form-group">
            <label for="">Album Year Released</label>
            <input
                class="form-control @error('year_released') form-control-highlight @enderror"
                name="year_released"
                type="text"
                value="{{ old('year_released') }}"
                required>
            @error('year_released')
                <p class="alert alert-danger  alert-danger">{{ $errors->first('year_released') }}</p>
            @enderror
        </div>

        <div class="form-group">
            <label for="">Album Artist (ID)</label>
            <input
                class="form-control @error('artist_id') form-control-highlight @enderror"
                name="artist_id"
                type="text"
                value="{{ old('artist_id') }}"
                required>
            @error('artist_id')
                <p class="alert alert-danger  alert-danger">{{ $errors->first('artist_id') }}</p>
            @enderror
        </div>

        <button class="btn btn-primary" type="submit">Create Album</button>
    </form>
</div>

@endsection