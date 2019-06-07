<?php

use Illuminate\Database\Seeder;
use App\Modules\PlanDeEstudios;

class PlanesEstudioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(PlanDeEstudios::class, 20)->create();
    }
}
