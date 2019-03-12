<?php

use Faker\Generator as Faker;

$factory->define(\App\Film::class, function (Faker $faker) {
    return [
        'title' => $faker->unique()->name,
        'description' => $faker->text(),
        'year' => now(),
        'genre' => str_random(10),
        'rating' => rand(1, 10),
        'poster' => str_random(10),
        'time' => rand(30, 120),
        'slug' => str_random(10),
        'isCartoon' => true,
    ];
});

$factory->define(\App\Serial::class, function (Faker $faker) {
    return [
        'title' => $faker->unique()->name,
        'description' => $faker->text(),
        'genre' => str_random(10),
        'year' => now(),
        'rating' => rand(1, 10),
        'poster' => str_random(10),
        'season' => rand(1, 5),
        'slug' => str_random(10),
    ];
});

$factory->define(\App\Actor::class, function (Faker $faker) {
    return [
        'name' => $faker->unique()->name,
        'description' => $faker->text(),
        'year' => now(),
        'photo' => str_random(7),
        'slug' => str_random(10),
    ];
});

$factory->define(\App\Director::class, function (Faker $faker) {
    return [
        'name' => $faker->unique()->name,
        'description' => $faker->text(),
        'year' => now(),
        'photo' => str_random(10),
        'slug' => str_random(10),
    ];
});
