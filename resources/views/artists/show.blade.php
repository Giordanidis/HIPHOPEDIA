@extends('layout')

@section('main')

<div class="container">
    <!-- Example row of columns -->
    <div class="row">
      <div class="col-sm-12">
        <h2>{{ $artist->name }}</h2>
        <hr>
        <h3>Albums</h3>

        <nav class="nav flex-column">
          @foreach ($artist->albums as $album)
          <a class="nav-link" href="{{ $artist->path() }}/albums/{{ $album->slug }}">{{ $album->title }}</a>
          @endforeach
        </nav>
        
        <p><a class="btn btn-secondary" href="/artists/{{ $artist->slug }}/edit" role="button">Edit &raquo;</a></p>
      </div>
    </div>

    <hr>

  </div> <!-- /container -->
@endsection