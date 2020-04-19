<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\OrderItem;
use Faker\Generator as Faker;

$factory->define(OrderItem::class, function (Faker $faker) {
    return [
        'product_id' => factory(\App\Product::class),
        'quantity' => $faker->numberBetween(1, 10),
        'order_id' => factory(\App\Order::class),
    ];
});
