<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Order;
use Faker\Generator as Faker;

$factory->define(Order::class, function (Faker $faker) {
    return [
        'customer_id' => factory(\App\Customer::class),
        'seller_id' => factory(\App\Seller::class),
        'destination' => $faker->address,
    ];
});
