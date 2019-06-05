<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Comuna;
use Faker\Generator as Faker;

$factory->define(Comuna::class, function (Faker $faker) {
	$regiones = DB::table('region')->select('id')->get();
    return [
        'nombre' => $faker->sentence(1),
        'id_region' => $regiones->random()->id,
    ];
});
