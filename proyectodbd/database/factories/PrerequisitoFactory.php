<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

$factory->define(App\Prerequisito::class, function (Faker $faker) {
	$asignaturas = DB::table('asignatura')->get()->random();
    return [
        'nombre' => $asignaturas->nombre,
        'nivel' => $asignaturas->nivel,
    ];
});
