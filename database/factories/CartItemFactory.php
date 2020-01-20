<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\CartItem;
use Faker\Generator as Faker;

$factory->define(CartItem::class, function (Faker $faker) {
    return [
        'product_id' => function () {
            return App\Product::inRandomOrder()->first()->id;
        },  
        'shoppingcart_id' => function () {
            return App\ShoppingCart::inRandomOrder()->first()->id;
        },  
        'quantity'=>$faker->numberBetween($min=1, $max=3),
        'unitcost'=>$faker->randomFloat($nbMaxDecimals = 2, $min =25, $max =75),
        'subtotal'=>$faker->randomFloat($nbMaxDecimals = 2, $min =25, $max =75),
    ];
});
