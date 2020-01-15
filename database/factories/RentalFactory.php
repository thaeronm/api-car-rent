<?php

use Faker\Generator as Faker;

$factory->define(App\Rental::class, function (Faker $faker) {
    return [
        'rental_status_id' => \App\RentalStatus::all()->random()->id,
        'vehicle_id' => \App\Vehicle::all()->random()->id,
        'customer_id' => \App\Customer::all()->random()->id,
        'from' => $faker->dateTime,
        'to' => $faker->dateTime,
    ];
});
