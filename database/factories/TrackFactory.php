<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Track;
use Faker\Generator as Faker;

$factory->define(Track::class, function (Faker $faker) {
    return [
        'album_id' => factory(\App\User::class),
        'title' => $faker->sentence,
        'slug' => $faker->slug
    ];
});
