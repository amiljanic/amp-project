<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\CartItem;
use Faker\Generator as Faker;

$factory->define(CartItem::class, function (Faker $faker) {
    return [
        'customer_id' => factory(\App\Customer::class),
        'variant_id' => factory(\App\Product::class),
        'quantity' => $faker->numberBetween(1, 10),
    ];
});
