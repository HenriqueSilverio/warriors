<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Speciality::class, function (Faker $faker) {
    return [
        'name' => ucfirst($faker->unique()->word),
    ];
});
