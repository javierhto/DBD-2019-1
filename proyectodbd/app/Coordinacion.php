<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coordinacion extends Model
{
    //
    protected $table = 'coordinacion';

    public function asignatura() {
    	return $this->belongsTo('App\Asignatura');
    }

    public function profesor() {
    	return $this->belongsToMany('App\Profesor', 'coordinacion_profesor');
    }

    public function horario() {
    	return $this->belongsToMany('App\Horario', 'coordinacion_horario');
    }
}
