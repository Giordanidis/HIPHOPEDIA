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
            'albums' => Album::where('artist_id', $artist->id)->get()
        ]);

    }

    public function show(Artist $artist, Album $album)
    {
        return view('albums.show', [
            'album' => Album::where('slug', $album->slug)->firstOrFail()
        ]);
    }
}
