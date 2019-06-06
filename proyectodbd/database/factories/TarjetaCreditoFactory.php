<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

$factory->define(App\Modules\TarjetaCredito::class, function (Faker $faker) {
    return [
        'numero' => $faker->creditCardNumber,
        'fecha_expiracion' => $faker->creditCardExpirationDate,
        'nombre_titular' => $faker->name,
        'pais_facturacion' => $faker->country,
        'ciudad_facturacion' => $faker->city,
        'direccion_facturacion' => $faker->address,
    ];
});
