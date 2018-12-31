<?php

use Faker\Generator as Faker;

$factory->define(App\Exhibitions\Section::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(),
        'content' => $faker->paragraphs(3, true)
    ];
});
