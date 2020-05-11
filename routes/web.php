<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $alphabet = range('A', 'Z');
    return view('welcome', [
        'alphabet' => $alphabet
    ]);
});

// GET ALL ARTISTS
Route::get('/artists', 'ArtistsController@index')->name('artists.index');

// GET ALL ARTISTS WHOSE NAME STARTS WITH "A-LETTER"
// Route::get('artists', 'ArtistsController@index');

Route::post('/artists', 'ArtistsController@store');

// GET SPECIFIC ARTIST (BY SLUG)
Route::get('/artists/create', 'ArtistsController@create');

// GET SPECIFIC ARTIST (BY SLUG)
Route::get('/artists/{artist}', 'ArtistsController@show')->name('artists.show');

// EDIT SPECIFIC ARTIST (BY SLUG)
Route::get('/artists/{artist}/edit', 'ArtistsController@edit');

// EDIT SPECIFIC ARTIST (BY SLUG)
Route::put('/artists/{artist}', 'ArtistsController@update');

// GET ALL ALBUMS OF A SINGLE ARTIST
Route::get('/artists/{artist}/albums', 'AlbumsController@index')->name('albums.index');

// GET A SINGLE ALBUM OF A SINGLE ARTIST
Route::get('/artists/{artist}/albums/{album}', 'AlbumsController@show')->name('albums.show');
