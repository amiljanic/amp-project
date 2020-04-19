<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use App\Seller;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'seller_id' => factory(Seller::class),
        'name' => $faker->word,
        'description' => $faker->sentence,
        'details' => $faker->paragraphs(3, true),
        'available' => $faker->numberBetween(1000, 5000),
    ];
});
