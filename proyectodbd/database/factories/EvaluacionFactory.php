<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

$factory->define(App\Modules\Evaluacion::class, function (Faker $faker) {
    $asignaturas = DB::table('asignatura')->select('id')->get();
    $alumnos = DB::table('alumno')->select('id')->get();
    return [
        'nombre' => $faker->sentence(1),
        'tipo' => $faker->randomElement(['pep','control','presentación','pa']),
        'ponderacion' => mt_rand(1, 100) / 100,
        'id_asignatura' => $asignaturas->random()->id,
        'nota' => $faker->randomFloat($nbMaxDecimals = 1, $min = 1, $max = 7),
        'id_alumno' => $alumnos->random()->id,
    ];
});
