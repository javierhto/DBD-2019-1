<?php

use Illuminate\Database\Seeder;
use App\Modules\Horario;

class HorariosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Horario::class, 20)->create();
    }
}
