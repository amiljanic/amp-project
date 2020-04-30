<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Order;
use App\OrderItem;
use App\Variant;
use Faker\Generator as Faker;

$factory->define(OrderItem::class, function (Faker $faker) {
    $variant = Variant::all()->random();
    return [
        'order_id' => Order::all()->random()->id,
        'variant_id' => $variant->id,
        'quantity' => $faker->numberBetween(1, 10),
        'unit_price' => $variant->price,
    ];
});
