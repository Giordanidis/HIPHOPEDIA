@extends('layout')

@section('main')

<div class="container">
    <!-- Example row of columns -->
    <div class="row">
      <h2>{{ $artist->name }}: Albums</h2>

      <hr>

      @foreach ($albums as $album)
      <div class="mb-3 w-100">
        <div class="card">
          <h5 class="card-header">#{{ $loop->index}}</h5>
          <div class="card-body">
            <h5 class="card-title">{{ $album->title }}</h5>
            <a href="{{ $artist->path() }}/albums/{{ $album->slug }}" class="btn btn-primary">View Album &raquo;</a>
            

          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div> <!-- /container -->
@endsection