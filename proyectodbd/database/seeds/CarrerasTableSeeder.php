<?php

use Illuminate\Database\Seeder;
use App\Modules\Carrera;

class CarrerasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Carrera::class, 20)->create();
    }
}
