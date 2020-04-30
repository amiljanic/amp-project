<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\SpecificationGroup;
use Faker\Generator as Faker;

$factory->define(SpecificationGroup::class, function (Faker $faker) {
    return [
        'name' => ucfirst($faker->words($faker->numberBetween(1, 3), true)),
    ];
});
