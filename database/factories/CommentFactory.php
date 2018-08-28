<?php

use Faker\Generator as Faker;

$factory->define(App\Comment::class, function (Faker $faker) {
    return [
        'body' => $faker->sentences(rand(1,4), true),
        'user_id' => function()
            {
                return factory(\App\User::class)->create()->id;
            },
        'post_id' => function()
            {
                return factory(\App\Post::class)->create()->id;
            }
    ];
});
