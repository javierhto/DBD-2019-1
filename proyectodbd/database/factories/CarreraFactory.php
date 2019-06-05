<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Carrera;
use Faker\Generator as Faker;

$factory->define(Carrera::class, function (Faker $faker) {
    return [
        'nombre' => $faker->sentence(1),
        'codigo_carrera' => $faker->sentence(1),
        'arancel' => rand(2000000, 6000000),
    ];
});
