<?php

use Illuminate\Database\Seeder;
use App\Asignatura;

class AsignaturasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Asignatura::class, 200)->create();
    }
}
