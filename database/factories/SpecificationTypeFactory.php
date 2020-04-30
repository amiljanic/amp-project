<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\SpecificationGroup;
use App\SpecificationType;
use Faker\Generator as Faker;

$factory->define(SpecificationType::class, function (Faker $faker) {
    return [
        'name' => ucfirst($faker->words($faker->numberBetween(1, 3), true)),
        'specification_group_id' => SpecificationGroup::all()->random()->id,
    ];
});
