<?php

use Faker\Generator as Faker;

$factory->define(App\Item::class, function (Faker $faker) {
    return [
        'title' => $faker->word,
        'caption' => 'lklklklklklk',
        'thumbnail' => 'Vohs8VRUDJtq84MP4af0xnRbAlq4KXOXyd3pAxGG.jpeg'
    ];
});
