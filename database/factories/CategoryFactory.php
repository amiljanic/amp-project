<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Category;
use Faker\Generator as Faker;

$factory->define(Category::class, function (Faker $faker) {
    $name = ucfirst($faker->words($faker->numberBetween(1, 3), true));
    $slug = Str::slug($name, '-');
    return [
        'name' => $name,
        'slug' => $slug,
    ];
});
