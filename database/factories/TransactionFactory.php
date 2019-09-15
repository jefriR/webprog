<?php

use Faker\Generator as Faker;

$factory->define(\App\Transaction::class, function (Faker $faker) {
    return [
        'transactionDate' => $faker->dateTimeThisMonth()->format('Y-m-d'),
        'remember_token' => str_random(10),
    ];
});
