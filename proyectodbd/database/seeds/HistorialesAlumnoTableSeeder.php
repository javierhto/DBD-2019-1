<?php

use Illuminate\Database\Seeder;
use App\Modules\HistorialAlumno;

class HistorialesAlumnoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(HistorialAlumno::class, 50)->create();
    }
}
