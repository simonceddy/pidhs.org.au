<?php

use Faker\Generator as Faker;

$factory->define(App\Item::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(),
        'caption' => $faker->paragraph(),
        'thumbnail' => $faker->image()
    ];
});
