<?php

use Faker\Generator as Faker;
use App\Genre;

$factory->define(Genre::class, function (Faker $faker) {
    return [
        'name' => $faker->slug,
        'remember_token' => str_random(10),
    ];
});
