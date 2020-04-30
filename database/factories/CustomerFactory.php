<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Country;
use App\Customer;
use App\User;
use Faker\Generator as Faker;

$factory->define(Customer::class, function (Faker $faker) {
    return [
        'user_id' => factory(User::class),
        'country_id' => Country::all()->random()->id,
    ];
});
