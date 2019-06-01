<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CoordinadorDocente extends Model
{
    //
    protected $table = 'coordinador_docente';

    public function comuna() {
    	return $this->belongsTo('App\Comuna');
    }

    public function carrera() {
    	return $this->hasMany('App\Carrera');
    }
}
