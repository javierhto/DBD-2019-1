<?php

use Illuminate\Database\Seeder;
use App\Modules\RegistroDeAccion;

class RegistrosAccionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(RegistroDeAccion::class, 20)->create();
    }
}
