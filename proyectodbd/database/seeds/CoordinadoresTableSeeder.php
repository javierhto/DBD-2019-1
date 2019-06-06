<?php

use Illuminate\Database\Seeder;
use App\Modules\CoordinadorDocente;
class CoordinadoresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(CoordinadorDocente::class, 20)->create();
    }
}
