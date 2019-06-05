<?php

use Illuminate\Database\Seeder;
use App\AdministradorGeneral;

class AdministradoresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(AdministradorGeneral::class, 20)->create();
    }
}
