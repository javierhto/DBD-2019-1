<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Modules\PlanDeEstudiosAsignatura;
use Faker\Generator as Faker;

$factory->define(PlanDeEstudiosAsignatura::class, function (Faker $faker) {
    $plan_de_estudios = DB::table('plan_estudios')->select('id')->get();
    return [
        'id_plan_estudios' => $plan_de_estudios->random()->id,
        
    ];
});
