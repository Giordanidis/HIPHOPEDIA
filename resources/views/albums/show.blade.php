@extends('layout')

@section('main')

<div class="container">
    <!-- Example row of columns -->
    <div class="row">
      <div class="col-sm-12">
        <h2>{{ $album->title }}</h2>
        <p>Year Released: {{ $album->year_released }}</p>
        <p>By: <a href="{{ $album->artist->path() }}">{{ $album->artist->name }}</a></p>
        <p><a class="btn btn-secondary" href="#" role="button">Edit &raquo;</a></p>
      </div>
    </div>
    <hr>
  </div> <!-- /container -->
@endsection