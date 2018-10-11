<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Type::class, function (Faker $faker) {
    return [
        'name' => ucfirst($faker->unique()->word),
    ];
});
