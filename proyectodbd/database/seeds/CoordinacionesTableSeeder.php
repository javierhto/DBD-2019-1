<?php

use Illuminate\Database\Seeder;
use App\Modules\Coordinacion;

class CoordinacionesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Coordinacion::class, 20)->create();
    }
}
