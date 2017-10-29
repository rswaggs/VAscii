<?php

use Faker\Generator as Faker;

$factory->define(App\Video::class, function (Faker $faker) {
    return [
        'user_id' => function() {
            return App\User::find(1)->id;
        },
        'path' => '/' . $faker->word . '/',
        'title' => $faker->sentence(3),
        'description' => $faker->paragraph(),
        'thumbnail' => '/' . $faker->word . '/',
    ];
});