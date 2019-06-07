<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

$factory->define(App\Modules\Coordinacion::class, function (Faker $faker) {
    $asignaturas = DB::table('asignatura')->select('id')->get();
    $profesores = DB::table('profesor')->select('id')->get();
    return [
        'semestre' => $faker->numberBetween($min = 1, $max = 12),
        'laboratorio' => $faker->numberBetween($min = 0, $max = 1),
        'cupo' => $faker->numberBetween($min = 15, $max = 40),

        //Llaves foráneas
        'id_profesor' => $profesores->random()->id,
        'id_asignatura' => $asignaturas->random()->id,
    ];
});
