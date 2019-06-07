<?php

use Illuminate\Database\Seeder;
use App\Modules\Facultad;

class FacultadesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Facultad::create(['nombre' => 'Ingenieria',]);
        Facultad::create(['nombre' => 'Humanidades',]);
        Facultad::create(['nombre' => 'Ciencias',]);
        Facultad::create(['nombre' => 'Ciencias Medicas',]);
        Facultad::create(['nombre' => 'Derecho',]);
    }
}
