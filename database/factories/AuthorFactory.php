<?php

use Faker\Generator as Faker;
use App\Author;

$factory->define(Author::class, function (Faker $faker) {
    return [
        'name' => $faker->unique()->name,
        'dob' => $faker->dateTimeBetween('-40 years', 'now'),
        'country' => $faker->country,
    ];
});
