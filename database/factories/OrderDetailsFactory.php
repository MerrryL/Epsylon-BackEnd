<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\OrderDetails;
use Faker\Generator as Faker;

$factory->define(OrderDetails::class, function (Faker $faker) {
    return [
        'fk_order_id' => function () {
            return App\Order::inRandomOrder()->first()->order_id;
        },     
        'fk_product_id' => function () {
            return App\Product::inRandomOrder()->first()->product_id;
        },     
        'productname' => $faker->numberBetween($min=1, $max=20),
        'quantity' => $faker->numberBetween($min=1, $max=3),
        'unitcost' => $faker->randomFloat($nbMaxDecimals=2, $min=20, $max=50),   
        'subtotal' => $faker->randomFloat($nbMaxDecimals=2, $min=20, $max=50),      
    ];
});
