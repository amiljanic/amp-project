<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Specification;
use Faker\Generator as Faker;

$factory->define(Specification::class, function (Faker $faker) {
    return [
        'specification_type_id' => \App\SpecificationType::all()->random()->id,
        'value' => ucfirst($faker->words($faker->numberBetween(1, 2), true)),
    ];
});
