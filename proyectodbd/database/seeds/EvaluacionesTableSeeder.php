<?php

use Illuminate\Database\Seeder;
use App\Modules\Evaluacion;

class EvaluacionesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Evaluacion::class, 80)->create();
    }
}
