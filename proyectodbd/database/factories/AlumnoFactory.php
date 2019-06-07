<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

//StandBy

$factory->define(App\Modules\Alumno::class, function (Faker $faker) {

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
            $table->date('ultima_matricula');
            'nivel_actual' => $faker->numberBetween($min = 1, $max = 12),
            $table->float('avance');
            $table->float('eficiencia');
            $table->integer('asignaturas_aprobadas')  => $faker->numberBetween($min = 0, $max = 50);
            $table->float('PPA');
        'numero_matricula' => $faker->unique()->randomNumber($nbDigits = 8),
        'fecha_nacimiento' => $faker->date($format = 'Y-m-d', $max = '2000-01-01'),
        'nombre' => $faker->name,
        'correo' => $faker->unique()->safeEmail,
        'direccion' => $faker->address,
        'telefono' => $faker->unique()->randomNumber($nbDigits = 8),
        'celular' => $faker->unique()->randomNumber($nbDigits = 8),
        'contrasena' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
        'jornada' => $faker->randomElement(['diurno','vespertino']),
        'situacion' => $faker->randomElement(['regular','egresado', 'retirado']),
        'ano_ingreso' => $faker->numberBetween($min = 2011, $max = 2019),
        'ultima_matricula' =>$faker->dateTimeBetween($startDate = '-10 years', $endDate = 'now', $timezone = null),
        'id_comuna' => $comunas->random()->id,
        'id_carrera' => $carreras->random()->id,

        //Datos que se calculan
        'nivel_actual' => $faker->numberBetween($min = 1, $max = 12),
        'avance' => $faker->randomFloat($nbMaxDecimals = 3, $min = 0, $max = 1),
        'eficiencia' => $faker->randomFloat($nbMaxDecimals = 3, $min = 0, $max = 1),
        'asignaturas_aprobadas' => $faker->numberBetween($min = 0, $max = 30),
        'PPA' =>  rand(10, 70) / 10,
    ];
});
