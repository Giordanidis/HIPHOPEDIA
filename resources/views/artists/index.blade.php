@extends('layout')

@section('main')

<div class="container">
    <!-- Example row of columns -->
    <div class="row">
      @foreach ($artists as $artist)
      <div class="col-sm-12">
        <h2><a href="{{ $artist->path() }}">{{ $artist->name }}</a></h2>
        <p><a class="btn btn-secondary" href="{{ $artist->path() }}" role="button">View Details &raquo;</a></p>
      </div>
      @endforeach
    </div>
    <hr>
  </div> <!-- /container -->
@endsection