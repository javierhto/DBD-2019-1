<?php

use Illuminate\Database\Seeder;
use App\Facultad;

class FacultadesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Facultad::class, 3)->create();
    }
}
