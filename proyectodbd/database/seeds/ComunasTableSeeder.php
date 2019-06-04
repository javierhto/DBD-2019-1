<?php

use Illuminate\Database\Seeder;

class ComunasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	factory(App\Comuna::class, 50)->create();
    }
}
