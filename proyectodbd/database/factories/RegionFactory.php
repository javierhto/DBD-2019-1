<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Modules\Region;
use Faker\Generator as Faker;

$factory->define(Region::class, function (Faker $faker) {
    return [
        'nombre' => $faker->sentence(1),
    ];
});