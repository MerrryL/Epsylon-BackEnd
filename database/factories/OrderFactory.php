<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Order;
use Faker\Generator as Faker;

$factory->define(Order::class, function (Faker $faker) {
    return [
        'dateshipped'=> now(),
        
        'fk_user_id' => function () {
            return App\User::inRandomOrder()->first()->user_id;
        },
        'customername' => $faker->userName,

        'fk_shipping_id' => function () {
            return App\ShippingInfo::inRandomOrder()->first()->shipping_id;
        },

        'status'=> 'delivering',

        'updated_at'=>now(),
        'created_at'=>now(),

    ];
});
