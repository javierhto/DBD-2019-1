<?php

use Illuminate\Database\Seeder;
use App\Prerequisito;

class PrerequisitosTableSeeder extends Seeder
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
        	$cantidad = rand(0,3);
        	factory(Prerequisito::class, $cantidad)->create(['id_asignatura' => $asignatura->id]);
        }
    }
}
