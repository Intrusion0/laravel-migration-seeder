<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Song;
use Faker\Generator as Faker;

$factory->define(Song::class, function (Faker $faker) {
    return [
        'song_name'=>$faker->sentence(),
        'artist'=>$faker->sentence(2),
        'duration'=>$faker->time(),
        'publication'=>$faker->date('Y_m_d'),
        'producer'=>$faker->name(),
        'genre'=>$faker->word()
    ];
});
