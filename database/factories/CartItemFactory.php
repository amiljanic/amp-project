<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\CartItem;
use App\Customer;
use App\Variant;
use Faker\Generator as Faker;

$factory->define(CartItem::class, function (Faker $faker) {
    $variant = Variant::all()->random();
    return [
        'customer_id' => Customer::all()->random()->id,
        'seller_id' => $variant->product->seller,
        'variant_id' => $variant->id,
        'quantity' => $faker->numberBetween(1, 10),
    ];
});
