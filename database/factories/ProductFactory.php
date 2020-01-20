<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'productname' => $faker->word,
        'description' => $faker->sentence,
        'productprice' => $faker->randomFloat(2, 25, 75),
        'availabilitystatus' => $faker->boolean,
        'hidden' => $faker->boolean,
    ];
});
