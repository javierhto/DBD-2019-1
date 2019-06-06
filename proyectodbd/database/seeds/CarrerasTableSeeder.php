<?php

use Illuminate\Database\Seeder;
use App\Modules\Carrera;

class CarrerasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$departamentos = App\Departamento::all();
    	foreach ($departamentos as $departamento) {
    		$cantidad = rand(3,5);
    		factory(Carrera::class, $cantidad)->create(['id_departamento' => $departamento->id]);
    	}
    }
}
