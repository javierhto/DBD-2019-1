<?php

use Illuminate\Database\Seeder;
use App\Modules\Mensaje;

class MensajesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Mensaje::class, 50)->create();
    }
}
