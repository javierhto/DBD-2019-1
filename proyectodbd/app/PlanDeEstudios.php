<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PlanDeEstudios extends Model
{
    //
    protected $table = 'plan_estudios';

    public function carrera() {
    	return $this->belongsTo('App\Carrera');
    }

    public function asignatura() {
    	return $this->belongsToMany('App\Asignatura', 'plan_estudios_asignatura');
    }
}
