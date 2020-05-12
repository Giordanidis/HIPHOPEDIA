## HIPHOPEDIA

A project being made using Laravel [(7.10.3)](https://laravel.com/docs/7.x).

HIPHOPEDIA aims to make for a reference point for anyone interested in Greek Hip Hop Music.

Currently, it can contain Hip Hop artists, albums, tracks, and anyone can add/edit artists, albums, tracks.

TODO: Authentication/Registration System, so that anyone can have their own account.

You may download the project and check it on your own, provided that your system satisfies the requirements of [Laravel 7.10.3](https://laravel.com/docs/7.x#server-requirements).

## ADD DATA (EASY AND FAST)

Once you download and run the project, you can use Laravel Factories to easily generate some data and test the database.

### Example

Open tinker by: `php artisan tinker`

This will generate 3 new artists: `factory(\App\Artist::class,3)->create();`

This will generate 3 new albums for the artist with an id of "1": `factory(\App\Album::class,3)->create(['artist_id'=>'1']);`

This will generate 3 new tracks for the album with an id of "1": `factory(\App\Track::class,3)->create(['album_id'=>'1']);`