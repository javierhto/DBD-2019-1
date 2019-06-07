<?php

use Illuminate\Database\Seeder;
use App\Modules\CoordinacionProfesor;

class CoordinacionesProfesoresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $coordinaciones = App\Modules\Coordinacion::all();
        foreach ($coordinaciones as $coordinacion) {
    	   factory(CoordinacionProfesor::class)->create(['id_coordinacion' => $coordinacion->id]);
        }

    }
}
