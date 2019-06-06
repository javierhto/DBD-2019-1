<?php

use Illuminate\Database\Seeder;
use App\Modules\Departamento;

class DepartamentosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Departamento::class, 20)->create();
    }
}
