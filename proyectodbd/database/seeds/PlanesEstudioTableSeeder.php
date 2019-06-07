<?php

use Illuminate\Database\Seeder;
use App\Modules\PlanDeEstudios;

class PlanesEstudioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$carreras = App\Carrera::all();
    	foreach ($carreras as $carrera) {
    		$cantidad = rand(1,3);
    		while ($cantidad > 0) {
    			factory(PlanDeEstudios::class)->create(['version' => $cantidad, 'id_carrera' => $carrera->id]);
    			$cantidad = $cantidad - 1;
    		}
    }
}
