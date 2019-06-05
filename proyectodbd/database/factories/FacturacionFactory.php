<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;


$factory->define(App\Facturacion::class, function (Faker $faker) {
	$expiration = $faker->dateTimeBetween($startDate = '-5 years', $endDate = 'now');
    return [
        'estado' => $faker->randomElement(['pagado', 'por pagar', 'pago atrasado']),
		'monto' => $faker->numberBetween($min = 100000, $max = 200000), 
		'fecha' => $expiration,
		'fecha_expiracion' => $faker->dateTimeInInterval($startDate = $expiration, $interval = '+ 1 month'),
    ];
});
