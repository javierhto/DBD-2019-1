<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\AlumnoCarrera;
use Faker\Generator as Faker;

$factory->define(AlumnoCarrera::class, function (Faker $faker) {
    $carreras = DB::table('carrera')->select('id')->get();
    return [
        'id_carrera' => $carreras->random()->id,
    ];
});
