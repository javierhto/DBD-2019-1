<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;
use App\Asignatura;

$factory->define(Asignatura::class, function (Faker $faker) {
	
    return [
        'nombre' => $faker->sentence(1),
        'nivel' => rand(1, 12),
        'T' => rand(1, 9),
        'E' => rand(1, 9),
        'L' => rand(1, 9),
    ];
});
