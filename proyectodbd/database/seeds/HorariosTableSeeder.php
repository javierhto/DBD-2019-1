<?php

use Illuminate\Database\Seeder;
use App\Horario;

class HorariosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$dias = ['lunes','martes','miercoles','jueves','viernes','sabado'];
    	$bloques = [1,2,3,4,5,6,7,8,];

    	foreach ($dias as $dia) {
    		foreach($bloques as $bloque) {
    			factory(Horario::class)->create(['dia' => $dia, 'bloque' => $bloque]);
    		}
    	}
    }
}
