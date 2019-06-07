<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

//StandBy

$factory->define(App\Alumno::class, function (Faker $faker) {

	//crea tarjetas para el alumno
	/*
	$numeroTarjetas = rand(0,3);
	factory(App\TarjetaCredito::class, 20)->create(['id_alumno' => $alumno->id]);
*/
    $comunas = DB::table('comuna')->select('id')->get();
    return [
           'numero_matricula' => $faker->unique()->randomNumber($nbDigits = 8),
            'fecha_nacimiento' => $faker->date($format = 'Y-m-d', $max = '2000-01-01'),
            'nombre' => $faker->name,
            'correo' => $faker->unique()->safeEmail,
            'direccion' => $faker->address,
            'telefono' => $faker->unique()->randomNumber($nbDigits = 8),
            'celular' => $faker->unique()->randomNumber($nbDigits = 8),
            'contrasena' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'jornada' => $faker->randomElement(['diurno','vespertino']),
            'situacion' => $faker->randomElement(['regular']),
            'ano_ingreso' => $faker->numberBetween($min = 2011, $max = 2019),
            'ultima_matricula' => now(),
            'nivel_actual' => $faker->numberBetween($min = 1, $max = 12),
            'avance' => $faker->numberBetween($min = 0, $max = 30),
            'eficiencia' => $faker->numberBetween($min = 0, $max = 100),
            'asignaturas_aprobadas' => $faker->numberBetween($min = 0, $max = 30),
            'PPA' => rand(10, 70) / 10,
            'id_comuna' => $comunas->random()->id,
    ];
});
