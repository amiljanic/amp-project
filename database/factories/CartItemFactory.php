<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\CartItem;
use Faker\Generator as Faker;

$factory->define(CartItem::class, function (Faker $faker) {
    return [
        'customer_id' => factory(\App\Customer::class),
        'order_item_id' => factory(\App\OrderItem::class),
    ];
});
