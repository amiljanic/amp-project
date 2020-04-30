<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use App\Variant;
use Faker\Generator as Faker;

$factory->define(Variant::class, function (Faker $faker) {
    return [
        'product_id' => Product::all()->random()->id,
        'price' => $faker->randomFloat(2, 1, 100),
        'stock' => $faker->numberBetween(2000, 5000),
    ];
});
