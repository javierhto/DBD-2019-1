<?php

use Illuminate\Database\Seeder;
use App\Modules\Profesor;

class ProfesoresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Profesor::class, 20)->create();
    }
}
