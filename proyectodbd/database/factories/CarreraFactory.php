<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Modules\Carrera;
use Faker\Generator as Faker;

$factory->define(Carrera::class, function (Faker $faker) {
    $departamentos = DB::table('departamento')->select('id')->get();
    return [
        'nombre' => $faker->sentence(1),
        'codigo_carrera' => $faker->unique()->randomNumber($nbDigits = 8),
        'arancel' => $faker->numberBetween($min = 1000000, $max = 5000000),
        'id_departamento' => $departamentos->random()->id,
    ];
});
