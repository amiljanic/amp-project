<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Customer;
use App\Product;
use App\Review;
use Faker\Generator as Faker;

$factory->define(Review::class, function (Faker $faker) {
    return [
        'customer_id' => Customer::all()->random()->id,
        'product_id' => Product::all()->random()->id,
        'stars' => $faker->numberBetween(1, 5),
        'comment' => $faker->paragraph,
    ];
});
