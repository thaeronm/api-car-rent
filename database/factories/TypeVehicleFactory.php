<?php

use Faker\Generator as Faker;

$factory->define(App\TypeVehicle::class, function (Faker $faker) {
    return [
        'name' => $faker->century
    ];
});
