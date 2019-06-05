<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

$factory->define(App\Coordinacion::class, function (Faker $faker) {
    return [
        'semestre' => rand(1,2),
        'laboratorio' => rand(0,1),
        'cupo' => rand(30, 50),
    ];
});
