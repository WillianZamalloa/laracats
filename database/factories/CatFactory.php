<?php

use Faker\Generator as Faker;

$factory->define(App\Cat::class, function (Faker $faker) {
    return [
        'breed_id' => rand(1,50),
        'name' => $faker->sentence($nbWords = 1, $variableNbWords = true),
        'date_of_birth' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'gender' => $faker->randomElement(['MACHO','HEMBRA']),
        'photo' => $faker->imageUrl($width=80, $height=60, 'cats'),     
    ];
});
