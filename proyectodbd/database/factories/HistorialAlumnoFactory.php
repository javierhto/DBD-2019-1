<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */


use Faker\Generator as Faker;

$factory->define(App\Modules\HistorialAlumno::class, function (Faker $faker) {
    $alumnos = DB::table('alumno')->select('id')->get();
    $coordinaciones = DB::table('coordinacion')->select('id')->get();
    return [
        //
        'semestre' => $faker->numberBetween($min = 1, $max = 12),
        'id_alumno' => $alumnos->random()->id,
        'id_coordinacion' => $coordinaciones->random()->id,
    ];
});
