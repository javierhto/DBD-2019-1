<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Modules\AlumnoCoordinacion;
use Faker\Generator as Faker;

$factory->define(AlumnoCoordinacion::class, function (Faker $faker) {
    $alumnos = DB::table('alumno')->select('id')->get();
    $coordinaciones = DB::table('coordinacion')->select('id')->get();
    return [
        'id_alumno' => $alumnos->random()->id,
        'id_coordinacion' => $coordinaciones->random()->id,
    ];
});
