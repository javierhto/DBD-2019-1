<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

$factory->define(App\Modules\Facultad::class, function (Faker $faker) {
    return [
        'nombre' => $faker->unique()->randomElement(['Ingenieria', 'Humanidades', 'Ciencias', 'Ciencias Medicas', 'Derecho']),//editar
    ];
});
