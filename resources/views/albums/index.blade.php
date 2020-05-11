@extends('layout')

@section('main')

<div class="container">
    <!-- Example row of columns -->
    <div class="row">
      @foreach ($albums as $album)
      <div class="col-sm-12">
        <h2><a href="{{ $album->slug }}">{{ $album->title }}</a></h2>
        <p><a class="btn btn-secondary" href="{{ $album->slug }}" role="button">View Details &raquo;</a></p>
        <hr>
      </div>
      @endforeach
    </div>
  </div> <!-- /container -->
@endsection