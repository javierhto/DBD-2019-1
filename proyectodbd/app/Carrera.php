<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carrera extends Model
{
    //
    protected $table = 'carrera';

    public function planDeEstudios() {
    	return $this->hasMany('App\PlanDeEstudios');
    }

    public function coordinadorDocente() {
    	return $this->belongsTo('App\CoordinadorDocente');
    }

    public function alumno() {
    	return $this->belongsToMany('App\Alumno', 'alumno_carrera');
    }
}
