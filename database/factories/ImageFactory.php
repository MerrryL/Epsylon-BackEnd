<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Image;
use Faker\Generator as Faker;

$factory->define(Image::class, function (Faker $faker) {
    return [
        'fk_product_id' => function () {
            return App\Product::inRandomOrder()->first()->product_id;
        },            
        'path' => 'storage/app/public',
        'name' => '01',
        'extension' => 'jpg',
        'position' => $faker->randomDigit,
        'updated_at' => now(),
        'created_at' => now(),
    ];
});
