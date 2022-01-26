<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Artist;
use Faker\Generator as Faker;

$factory->define(Artist::class, function (Faker $faker) {
    return [
        'name'=>$faker->firstName(),
        'surname'=>$faker->lastName(),
        'nationality'=>$faker->word(),
        'age'=>$faker->numberBetween(0, 120),
        'published_albums'=>$faker->numberBetween(0, 70),
        'musical_genre'=>$faker->word()
    ];
});
