<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

$factory->define(App\Departamento::class, function (Faker $faker) {
	$facultades = DB::table('facultad')->select('id')->get();
    return [
        'nombre' => $faker->sentence(3),
        'id_facultad' => $facultades->random()->id,
    ];
});
