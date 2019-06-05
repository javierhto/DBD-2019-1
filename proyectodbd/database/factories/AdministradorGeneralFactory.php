<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */
use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(App\AdministradorGeneral::class, function (Faker $faker) {
	$comunas = DB::table('comuna')->select('id')->get();
    return [
            'nombre' => $faker->name,
            'correo' => $faker->unique()->safeEmail,
            'direccion' => $faker->address,
            'celular' => $faker->unique()->randomNumber($nbDigits = 8),
            'contrasena' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'jornada' => $faker->randomElement(['completa','media','horas']),
            'situacion' => $faker->randomElement(['regular']), //Meter mas cosas
            'fecha_ingreso' => $faker->date($format = 'Y-m-d', $max = 'now'),
            'id_comuna' => $comunas->random()->id,
    ];
});
