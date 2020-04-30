<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Country;
use App\Customer;
use App\ShippingInfo;
use Faker\Generator as Faker;

$factory->define(ShippingInfo::class, function (Faker $faker) {
    return [
        'customer_id' => Customer::all()->random()->id,
        'country_id' => Country::all()->random()->id,
        'name' => $faker->name,
        'street' => $faker->streetAddress,
        'city' => $faker->city,
        'region' => $faker->state,
        'postal_code' => $faker->postcode,
        'phone' => $faker->phoneNumber,
    ];
});
