<?php

use Faker\Generator as Faker;
use App\BookRating;

$factory->define(BookRating::class, function (Faker $faker) {
    return [
        'book_id' => $faker->numberBetween(0, 1),
        'user_id' => $faker->numberBetween(0, 1),
        'rating' => $faker->numberBetween(0, 5),
    ];
});
