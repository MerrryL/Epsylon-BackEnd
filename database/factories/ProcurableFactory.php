<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Procurable;
use Faker\Generator as Faker;

$factory->define(Procurable::class, function (Faker $faker) {
    return [
        'type_id' => function () {
            return App\ProcurableType::inRandomOrder()->first()->id;
        }, 
        'procurable' => $faker->word,
    ];
});
