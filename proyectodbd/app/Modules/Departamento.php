<?php

namespace App\Modules;

use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    //
    protected $table = 'departamento';
    protected $fillable =['nombre','id_facultad'];
    public function facultad() {
    	return $this->belongsTo('App\Modules\Facultad');
    }

    public function carrera() {
    	return $this->hasMany('App\Modules\Carrera');
    }
}
