<?php

use Faker\Generator as Faker;

$factory->define(App\Collection::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(),
    ];
});
