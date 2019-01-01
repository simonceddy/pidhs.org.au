<?php

use Faker\Generator as Faker;

$factory->define(App\Item::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(),
        'caption' => $faker->paragraph(),
        'thumbnail' => 'f1AoSr8TeHP48QnAPzYD5Ir1judseHrGmiaLB8il.jpeg'
    ];
});
