<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;
use App\Modules\Asignatura;

$factory->define(Asignatura::class, function (Faker $faker) {
	
    return [
        'nombre' => $faker->sentence(1),
        'nivel' => $faker->numberBetween($min = 1, $max = 12),
        'T' => $faker->numberBetween($min = 1, $max = 9),
        'E' => $faker->numberBetween($min = 1, $max = 9),
        'L' => $faker->numberBetween($min = 1, $max = 9),
    ];
});
