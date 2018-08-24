<?php

use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(3, true),
        'body' => $faker->paragraphs(rand(2,6), true),
    ];
});
