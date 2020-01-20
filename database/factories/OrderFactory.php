<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Order;
use Faker\Generator as Faker;

$factory->define(Order::class, function (Faker $faker) {
    return [
        'dateshipped'=> now(),
        
        'user_id' => function () {
            return App\User::inRandomOrder()->first()->id;
        },
        'customername' => $faker->userName,

        'shipping_id' => function () {
            return App\ShippingInfo::inRandomOrder()->first()->id;
        },

        'status'=> 'delivering',

        'updated_at'=>now(),
        'created_at'=>now(),

    ];
});
