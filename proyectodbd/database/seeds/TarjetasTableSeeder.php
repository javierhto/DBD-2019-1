<?php

use Illuminate\Database\Seeder;
use App\Modules\TarjetaCredito;

class TarjetasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$alumnos = App\Modules\Alumno::all();
    	foreach ($alumnos as $alumno) {
    		$cantidad = rand(0,3);
    		factory(TarjetaCredito::class, $cantidad)->create(['id_alumno' => $alumno->id]);
    	}
    }
}
