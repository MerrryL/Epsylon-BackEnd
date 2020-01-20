<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\ShippingInfo;
use Faker\Generator as Faker;

$factory->define(ShippingInfo::class, function (Faker $faker) {
    return [
        'shippingtype'=>$faker->word,
        'shippingcost'=>$faker->randomFloat(2,2,5),
    ];
});
