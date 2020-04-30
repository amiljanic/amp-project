<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Order;
use App\Seller;
use App\ShippingInfo;
use Faker\Generator as Faker;

$factory->define(Order::class, function (Faker $faker) {
    $customer = ShippingInfo::all()->random()->customer_id;
    $shippingInfo = ShippingInfo::all()->where('customer_id', $customer)->first()->id;
    return [
        'customer_id' => $customer,
        'seller_id' => Seller::all()->random()->id,
        'shipping_info_id' => $shippingInfo,
    ];
});
