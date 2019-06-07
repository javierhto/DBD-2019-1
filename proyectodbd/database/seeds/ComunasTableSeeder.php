<?php

use Illuminate\Database\Seeder;
use App\Modules\Comuna;

class ComunasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	factory(Comuna::class, 50)->create();
    }
}
