<?php

use Illuminate\Database\Seeder;
use App\Modules\HistorialProfesor;

class HistorialesProfesorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(HistorialAlumno::class, 10)->create();
    }
}
