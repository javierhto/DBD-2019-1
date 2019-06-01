<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    //
    protected $table = 'departamento';

    public function facultad() {
    	return $this->belongsTo('App\Facultad');
    }

    public function carrera() {
    	return $this->hasMany('App\Carrera');
    }
}
