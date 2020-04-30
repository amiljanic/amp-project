<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Category;
use App\Product;
use App\Seller;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'seller_id' => Seller::all()->random()->id,
        'category_id' => Category::all()->where('level', 3)->random()->id,
        'name' => ucfirst($faker->words($faker->numberBetween(1, 7), true)),
        'description' => $faker->sentence,
        'details' => $faker->paragraphs(3, true),
    ];
});
