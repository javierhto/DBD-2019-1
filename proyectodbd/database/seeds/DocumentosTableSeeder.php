<?php

use Illuminate\Database\Seeder;
use App\Modules\Documento;

class DocumentosTableSeeder extends Seeder
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
        	$cantidad = rand(0,2);
        	factory(Documento::class, $cantidad)->create(['id_asignatura' => $asignatura->id]);
        }
    }
}
