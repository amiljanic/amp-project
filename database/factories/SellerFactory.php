<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Seller;
use App\User;
use Faker\Generator as Faker;

$factory->define(Seller::class, function (Faker $faker) {
    return [
        'user_id' => factory(User::class),
        'name' => $faker->company,
    ];
});
