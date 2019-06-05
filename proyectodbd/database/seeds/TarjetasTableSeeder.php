<?php

use Illuminate\Database\Seeder;
use App\TarjetaCredito;

class TarjetasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(TarjetaCredito::class, 50)->create();
    }
}
