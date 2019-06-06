<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

$factory->define(App\Modules\Coordinacion::class, function (Faker $faker) {
    $asignaturas = DB::table('asignatura')->select('id')->get();
    $profesores = DB::table('profesor')->select('id')->get();
    return [
        'semestre' => $faker->numberBetween($min = 1, $max = 12),
        'laboratorio' => numberBetween($min = 0, $max = 1),
        'cupo' => numberBetween($min = 15, $max = 40),

        //Llaves foráneas
        'id_profesor' => $regiones->random()->id,
        'id_asignatura' => $regiones->random()->id,
    ];
});
