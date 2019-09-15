<?php

use Faker\Generator as Faker;
use App\Book;

$factory->define(Book::class, function (Faker $faker) {
    return [
        'name' => $faker->title,
        'genre' => $faker->slug,
        'author' => $faker->name,
        'price' => $faker->name,
        'description' => $faker->sentence,
        'stock' => $faker->numberBetween(0, 10),
        'remember_token' => str_random(10),
    ];
});
