<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

$factory->define(App\Modules\Horario::class, function (Faker $faker) {
    return [
        /*'dia' => $faker->randomElement(['lunes','martes','miercoles','jueves','viernes','sabado']),
        'bloque'=> $faker->numberBetween($min = 1, $max = 8),*/
    ];
});
