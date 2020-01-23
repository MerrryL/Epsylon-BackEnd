<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'description' => $faker->sentence,
        'price' => $faker->randomFloat(2, 25, 75),
        'availability' => $faker->boolean,
        'new'=> $faker->numberBetween(0,1),
        'promo'=> $faker->numberBetween(0,1),
        'hidden' => $faker->boolean,
    ];
});
