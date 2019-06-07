<?php

use Illuminate\Database\Seeder;
use App\Modules\Coordinacion;

class CoordinacionesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$asignaturas = App\Modules\Asignatura::all();
    	foreach ($asignaturas as $asignatura) {
    		$cantidad = rand(1,3);
    		factory(Coordinacion::class, $cantidad)->create(['id_asignatura' => $asignatura->id]);
    	}
    }
}
