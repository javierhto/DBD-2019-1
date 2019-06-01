<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mensaje extends Model
{
    //
    protected $table = 'mensaje';

    public function alumno() {
    	return $this->belongsTo('App\Alumno');
    }

    public function profesor() {
    	return $this->belongsTo('App\Profesor');
    }
}
