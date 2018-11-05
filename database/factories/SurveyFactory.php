<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Survey::class, function (Faker $faker) {
    $colors = $faker->shuffle([
        'red',
        'orange',
        'yellow',
        'green',
        'blue',
        'indigo'
    ]);
    $genders = $faker->shuffle([
        'male',
        'female'
    ]);

    return [
        'name' => $faker->name,
        'age' => $faker->numberBetween($min = 18, $max = 100),
        'gender' => array_pop($genders),
        'country' => $faker->country,
        'favorite_color' => array_pop($colors),
        'rating' => $faker->numberBetween($min = 1, $max = 5),
        'likely_to_recommend' => $faker->numberBetween($min = 0, $max = 10),
        'comments' => $faker->text,
        'isFinished' => true
    ];
});
