<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TarjetaCredito extends Model
{
    //
    protected $table = 'tarjeta_credito';

    public function alumno() {
    	return $this->belongsTo('App\Alumno');
    }
}
