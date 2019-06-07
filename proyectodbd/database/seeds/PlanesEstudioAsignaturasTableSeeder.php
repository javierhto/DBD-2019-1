<?php

use Illuminate\Database\Seeder;
use App\PlanDeEstudiosAsignatura;

class PlanesEstudioAsignaturasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$asignaturas = App\Asignatura::all();
        foreach ($asignaturas as $asignatura) {
    	   factory(PlanDeEstudiosAsignatura::class)->create(['id_asignatura' => $asignatura->id]);
        }

    }
}
