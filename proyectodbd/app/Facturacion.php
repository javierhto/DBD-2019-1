<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Facturacion extends Model
{
    //
    protected $table = 'facturacion';

    public function alumno() {
    	return $this->belongsTo('App\Alumno');
    }
}
