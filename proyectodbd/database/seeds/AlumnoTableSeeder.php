<?php

use Illuminate\Database\Seeder;
use App\Modules\Alumno;

class AlumnoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Alumno::class, 100)->create();
    }
}
