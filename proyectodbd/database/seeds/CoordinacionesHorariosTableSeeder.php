<?php

use Illuminate\Database\Seeder;
use App\Modules\CoordinacionHorario;

class CoordinacionesHorariosTableSeeder extends Seeder
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
        	factory(CoordinacionHorario::class, 1)->create(['id_coordinacion' => $coordinacion->id]);
        }
    }
}
