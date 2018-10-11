<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Warrior::class, function (Faker $faker) {
    return [
        'name'         => $faker->unique()->firstName,
        'health'       => $faker->randomNumber(4),
        'defense'      => $faker->randomNumber(3),
        'damage'       => $faker->randomNumber(3),
        'attack_speed' => $faker->randomFloat(1, 1, 2),
        'move_speed'   => $faker->randomFloat(1, 1, 2),
        'thumbnail'    => $faker->image('/tmp', 70, 70, 'cats'),
    ];
});
