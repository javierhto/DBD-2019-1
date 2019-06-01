<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HistorialAlumno extends Model
{
    //
    protected $table = 'historial_alumno';

    public function alumno() {
    	return $this->belongsTo('App\Alumno');
    }
}
