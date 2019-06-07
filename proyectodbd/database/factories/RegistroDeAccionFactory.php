<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */


use Faker\Generator as Faker;

$factory->define(App\Modules\RegistroDeAccion::class, function (Faker $faker) {
    /* Roles: 
            1- Alumno
            2- Profesor
            3- Coordinador Docente
            4- Administrador General
    */

    $rol = $faker->numberBetween($min = 1, $max = 4);
    if($rol == 1)
    {
        $alumnos = DB::table('alumno')->select('id')->get();
        return [
            'accion' => $faker->numberBetween($min = 1, $max = 10),
            'rol' => $rol,
            'id_alumno' => $alumnos->random()->id,
        ];
    }
    if($rol == 2)
    {
        $profesores = DB::table('profesor')->select('id')->get();
        return [
            'accion' => $faker->numberBetween($min = 1, $max = 10),
            'rol' => $rol,
            'id_profesor' => $profesores->random()->id,
        ];
    }
    if($rol == 3)
    {
        $coordinadores = DB::table('coordinador_docente')->select('id')->get();
        return [
            'accion' => $faker->numberBetween($min = 1, $max = 10),
            'rol' => $rol,
            'id_coordinador_docente' => $coordinadores->random()->id,
        ];
    }
    if($rol == 4)
    {
        $administradores = DB::table('administrador_general')->select('id')->get();
        return [
            'accion' => $faker->numberBetween($min = 1, $max = 10),
            'rol' => $rol,
            'id_administrador' => $administradores->random()->id,
        ];
    }
    
});
