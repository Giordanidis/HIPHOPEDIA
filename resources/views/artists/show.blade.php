@extends('layout')

@section('main')

<div class="container">
    <!-- Example row of columns -->
    <div class="row">
      <div class="col-sm-12">
        <h2>{{ $artist->name }}</h2>
        <hr>
        {{-- Moved to  --}}
        {{-- <h3>Albums</h3> --}}
        {{-- <nav class="nav flex-column">
          @foreach ($artist->albums as $album)
          <a class="nav-link" href="{{ $artist->path() }}/albums/{{ $album->slug }}">{{ $album->title }}</a>
          @endforeach
        </nav> --}}
        <p>Location: {{ $artist->location }}</p>
        <p><a class="btn btn-secondary" href="/artists/{{ $artist->slug }}/edit" role="button">Edit Artist &raquo;</a></p>
        <p><a class="btn btn-secondary" href="/artists/{{ $artist->slug }}/albums" role="button">View Albums &raquo;</a></p>
      </div>
    </div>

    <hr>

  </div> <!-- /container -->
@endsection