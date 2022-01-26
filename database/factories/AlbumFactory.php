<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Album;
use Faker\Generator as Faker;

$factory->define(Album::class, function (Faker $faker) {
    return [
        'album_name'=>$faker->sentence(),
        'album_type'=>$faker->word(),
        'publication'=>$faker->date('Y_m_d'),
        'duration'=>$faker->time(),
        'genre'=>$faker->word(),
        'producer'=>$faker->name(),
        'registration'=>$faker->year()
    ];
});
