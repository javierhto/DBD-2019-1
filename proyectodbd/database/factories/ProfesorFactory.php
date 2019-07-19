<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

$factory->define(App\Modules\Profesor::class, function (Faker $faker) {
    $comunas = DB::table('comuna')->select('id')->get();
    return [
		'nombre' => $faker->name,
		'fecha_nacimiento' => $faker->date($format = 'Y-m-d', $max = '1995-01-01'),
   	    'email' => $faker->unique()->safeEmail,
        'direccion' => $faker->address,
        'telefono' => $faker->unique()->randomNumber($nbDigits = 7),
        'celular' => $faker->unique()->randomNumber($nbDigits = 8),
        'password' => bcrypt("test123"),
        'jornada' => $faker->randomElement(['completa','media','horas']),
        'situacion' => $faker->randomElement(['regular']), //Meter mas cosas
        'fecha_ingreso' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'estado_cuenta' => $faker->sentence(1),
        'grado_academico' => $faker->randomElement(['bachiller','licenciado','magister','doctorado']),
        'id_comuna' => $comunas->random()->id,
    ];
});
