<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */


use Faker\Generator as Faker;

$factory->define(App\Modules\PlanDeEstudios::class, function (Faker $faker) {
    
    $carreras = DB::table('carrera')->select('id')->get();
    return [
        'semestre' => $faker->numberBetween($min = 1, $max = 2),
        'id_carrera' => $carreras->random()->id,
        'version' => $faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 1),
    ];
});
