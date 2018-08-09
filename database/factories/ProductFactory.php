<?php

use Faker\Generator as Faker;
//para crear productos fake
$factory->define(App\Product::class, function (Faker $faker) {
    return [
        'name'			=> $faker->sentence,
        'description' 	=> $faker->sentence

    ];
});
