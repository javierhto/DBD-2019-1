<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */


use Faker\Generator as Faker;

$factory->define(App\Modules\HistorialAlumno::class, function (Faker $faker) {
    $alumnos = DB::table('alumno')->select('id')->get();
    $coordinacion = DB::table('coordinacion')->get()->random();
    $lab = 0.0;
    if($coordinacion->laboratorio == 1) {
    	$lab =  $faker->randomFloat($nbMaxDecimals = 1, $min = 1, $max = 7);
    }
    return [
        //
        'id_alumno' => $alumnos->random()->id,
        'id_coordinacion' => $coordinacion->id,
        'notaCatedra' => $faker->randomFloat($nbMaxDecimals = 1, $min = 1, $max = 7),
        'notaLaboratorio' => $lab,

    ];
});
