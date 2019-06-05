<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Comuna;
use Faker\Generator as Faker;

$factory->define(Comuna::class, function (Faker $faker) {
    return [
        'nombre' => $faker->sentence(1),
    ];
});
