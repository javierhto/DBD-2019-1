<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asignatura extends Model
{
    //
    protected $table = 'asignatura';

    public function evaluacion() {
    	return $this->hasMany('App\Evaluacion');
    }

    public function prerequisito() {
    	return $this->hasMany('App\Prerequisito');
    }

    public function coordinacion() {
    	return $this->hasMany('App\Coordinacion');
    }

    public function planDeEstudios() {
    	return $this->belongsToMany('App\PlanDeEstudios', 'plan_estudios_asignatura');
    }
}