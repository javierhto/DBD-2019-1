<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Modules\CoordinacionProfesor;
use Faker\Generator as Faker;

$factory->define(CoordinacionProfesor::class, function (Faker $faker) {
    $profesores = DB::table('profesor')->select('id')->get();
    return [
        'id_profesor' => $profesores->random()->id,
    ];
});
