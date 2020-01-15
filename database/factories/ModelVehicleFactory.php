<?php

use Faker\Generator as Faker;

$factory->define(App\ModelVehicle::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'daily_hire_rate' => $faker->randomFloat(2, 10, 100),
    ];
});
