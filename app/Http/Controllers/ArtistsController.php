<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use App\Artist;

class ArtistsController extends Controller
{
    // RENDERS A LIST OF ARTISTS
    public function index(Request $request){
        // return view('artists', [
        //     'artists' => Artist::orderBy('name')->get()
        // ]);

        $first_letter = $request->query('first_letter');

        return view('artists.index', [
            'artists' => Artist::where('name', 'like', $first_letter . '%')->orderBy('name')->get()
        ]);
    }

    // public function showArtistsByLetter(Request $request){
    //     $first_letter = $request->query('first_letter');

    //     return view('artists.show', [
    //         'artists' => Artist::where('name', 'like', $first_letter . '%')->orderBy('name')->get()
    //     ]);
    // }

    // SHOW A SINGLE ARTIST.
    public function show(Artist $artist){
        // return view('artists.show', [
        //     'artist' => Artist::where('slug', $slug)->firstOrFail()
        // ]);

        return view('artists.show', [ 'artist' => $artist ]);
    }

    // SHOW A VIEW TO CREATE A NEW ARTIST.
    public function create(){
        return view('artists.create');
    }

    // PERSIST THE NEW ARTIST.
    public function store(){
        // request()->validate([
        //     'name' => 'required',
        //     'slug' => 'required'
        // ]);

        // $artist = new Artist();
        // $artist->name = request('name');
        // $artist->slug = request('slug');
        // $artist->save();

        Artist::create($this->validateArtist());

        return redirect(route('artists.index'));
    }

    // SHOW A VIEW TO EDIT AN EXISTING ARTIST.
    public function edit(Artist $artist){
        return view('artists.edit', [ 'artist' => $artist ]);
        
    }

    // PERSIST THE EDITED ARTIST.
    public function update(Artist $artist){
        // request()->validate([
        //     'name' => 'required',
        //     'slug' => 'required'
        // ]);

        // $artist->name = request('name');
        // $artist->slug = request('slug');
        // $artist->save();

        $artist->update($this->validateArtist());

        return redirect($artist->path());
    }

    // DELETE THE ARTIST.
    public function destroy(){

    }

    protected function validateArtist(){
        return request()->validate([
            'name' => 'required',
            'slug' => 'required',
            'location' => 'required'
        ]);
    }
}
