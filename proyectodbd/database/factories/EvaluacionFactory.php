<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

$factory->define(App\Modules\Evaluacion::class, function (Faker $faker) {
    $asignaturas = DB::table('asignatura')->select('id')->get();
    return [
        'nombre' => $faker->sentence(1),
        'tipo' => $faker->randomElement(['pep','control','presentación','pa']),
        'ponderacion' => mt_rand(1, 100) / 100,
        'id_asignatura' => $asignaturas->random()->id,
    ];
});
