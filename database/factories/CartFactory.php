<?php

use Faker\Generator as Faker;

$factory->define(\App\Cart::class, function (Faker $faker) {
    return [
        'user_id' => $faker->numberBetween(0, 1),
        'book_id' => $faker->numberBetween(0, 1),
        'transaction_id' => $faker->numberBetween(0, 1),
        'qty' => $faker->name,
        'price' => $faker->name,
        'remember_token' => str_random(10),
    ];
});
