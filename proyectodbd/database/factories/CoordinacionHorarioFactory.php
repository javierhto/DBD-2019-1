<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Modules\CoordinacionHorario;
use Faker\Generator as Faker;

$factory->define(CoordinacionHorario::class, function (Faker $faker) {
    $horarios = DB::table('horario')->select('id')->get();
    return [
        'id_horario' => $horarios->random()->id,
        'sala' => $faker->numberBetween($min = 100, $max = 700),
    ];
});
