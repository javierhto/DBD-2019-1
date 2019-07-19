<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */
use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(App\Modules\AdministradorGeneral::class, function (Faker $faker) {
	$comunas = DB::table('comuna')->select('id')->get();
    return [
            'nombre' => $faker->name,
            'email' => $faker->unique()->safeEmail,
            'direccion' => $faker->address,
            'celular' => $faker->unique()->randomNumber($nbDigits = 8),
            'password' => bcrypt("test123"),
            'jornada' => $faker->randomElement(['completa','media','horas']),
            'situacion' => $faker->randomElement(['regular']), //Meter mas cosas
            'fecha_ingreso' => $faker->date($format = 'Y-m-d', $max = 'now'),
            'id_comuna' => $comunas->random()->id,
    ];
});
