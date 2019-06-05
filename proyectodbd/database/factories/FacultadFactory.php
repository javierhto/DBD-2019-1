<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

$factory->define(App\Facultad::class, function (Faker $faker) {
    return [
        'nombre' => $faker->sentence(3),
    ];
});
