<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Availabilities;
use Faker\Generator as Faker;

$factory->define(Availabilities::class, function (Faker $faker) {
    return [
        'product_id' => function () {
            return App\Product::inRandomOrder()->first()->id;
        },
        /*'procurable_id' => function () {
            return App\Product::inRandomOrder()->first()->id;
        }, */

        'dispo' => $faker->word(),

        'quantity' => $faker->randomDigit,
    ];
});
