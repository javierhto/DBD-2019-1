<?php

use Illuminate\Database\Seeder;
use App\AlumnoCarrera;

class AlumnoCarreraTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $alumnos = App\Alumno::all();
        foreach ($alumnos as $alumno) {
    	   factory(AlumnoCarrera::class)->create(['id_alumno' => $alumno->id]);
        }
    }
}
