<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */


use Faker\Generator as Faker;

$factory->define(App\PlanDeEstudios::class, function (Faker $faker) {

    return [
        'semestre' => rand(1,2),
    ];
});