<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Modules\Documento;
use Faker\Generator as Faker;

$factory->define(Documento::class, function (Faker $faker) {
    return [
        'nombre' => $faker->sentence(3),
        'fecha' => $faker->date($format = 'Y-m-d', $max = now()),
        'documento' => $faker->unique()->url,
    ];
});
