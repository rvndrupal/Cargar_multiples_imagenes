<?php

use Faker\Generator as Faker;

$factory->define(App\Product::class, function (Faker $faker) {
    return [
        'name'=> $faker->sentence,
        'description'=> $faker->sentence,
        'iframe'=> $faker->sentence,
        'category_id' => rand(1,5),
    ];
});
