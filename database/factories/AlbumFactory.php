<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Album;
use Faker\Generator as Faker;

$factory->define(Album::class, function (Faker $faker) {
    return [
        'artist_id' => factory(\App\User::class),
        'title' => $faker->sentence,
        'slug' => $faker->slug,
        'year_released' => $faker->date('Y')
    ];
});
