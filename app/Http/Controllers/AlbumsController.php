<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use App\Album;
use App\Artist;

class AlbumsController extends Controller
{
    public function index(Artist $artist)
    {
        // $albums = Album::where('artist_id', $artist->id)->get();
        
        return view('albums.index', [
            'artist' => $artist,
            'albums' => Album::where('artist_id', $artist->id)->get()
        ]);

    }

    public function show(Artist $artist, Album $album)
    {
        return view('albums.show', [
            'album' => Album::where('slug', $album->slug)->firstOrFail()
        ]);
    }

    public function create()
    {
        return view('albums.create');
    }

    public function store()
    {
        Album::create($this->validateAlbum());
        return redirect(route('artists.index'));
    }

    protected function validateAlbum(){
        return request()->validate([
            'title' => 'required',
            'slug' => 'required',
            'year_released' => 'required',
            'artist_id' => 'required'
        ]);
    }
}
