<?php

use Illuminate\Database\Seeder;
use App\Modules\Region;

class RegionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Region::class, 50)->create();
    }
}
