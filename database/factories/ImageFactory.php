<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Image;
use Faker\Generator as Faker;

$factory->define(Image::class, function (Faker $faker) {

    static $number = 1;
    return [
        'product_id' => function () {
            return App\Product::inRandomOrder()->first()->id;
        },            
        'path' => 'images/',
        'name' => $number++,
        'extension' => 'jpg',
        'position' => $faker->randomDigit,
        'updated_at' => now(),
        'created_at' => now(),
    ];
});
