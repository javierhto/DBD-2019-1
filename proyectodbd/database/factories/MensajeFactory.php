<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */


use Faker\Generator as Faker;

$factory->define(App\Modules\Mensaje::class, function (Faker $faker) {
    $alumnos = DB::table('alumno')->select('id')->get();
    $asignaturas = DB::table('asignatura')->select('id')->get();
    $profesores = DB::table('profesor')->select('id')->get();
    return [
        'asunto' => $faker->sentence($nbWords = 3, $variableNbWords = true),
        'contenido' => $faker->sentence($nbWords = 20, $variableNbWords = true), 
        'remitente' => $faker->sentence($nbWords = 3, $variableNbWords = true),
        'destinatario' => $faker->sentence($nbWords = 3, $variableNbWords = true),
        'id_alumno' => $alumnos->random()->id,
        'id_profesor' => $profesores->random()->id,
    ];
});
