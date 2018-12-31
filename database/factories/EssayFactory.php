<?php

use Faker\Generator as Faker;

$factory->define(App\Essay::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(),
        'content' => $faker->paragraphs(8, true)
    ];
});
