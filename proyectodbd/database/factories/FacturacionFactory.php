<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;


$factory->define(App\Modules\Facturacion::class, function (Faker $faker) {
	$expiration = $faker->dateTimeBetween($startDate = '-5 years', $endDate = 'now');
	$alumnos = DB::table('alumno')->select('id')->get();
    return [
        'estado' => $faker->randomElement(['pagado', 'pendiente']),
		'monto' => $faker->numberBetween($min = 50000, $max = 500000), 
		'fecha' => $expiration,
		'fecha_expiracion' => $faker->dateTimeInInterval($startDate = $expiration, $interval = '+ 1 month'),
		'id_alumno' => $alumnos->random()->id,
    ];
});
