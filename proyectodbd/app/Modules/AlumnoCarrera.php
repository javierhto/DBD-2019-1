<?php

namespace App\Modules;

use Illuminate\Database\Eloquent\Model;

class AlumnoCarrera extends Authenticatable
{
    //
    protected $table = 'alumno_carrera';
    protected $fillable =['id_carrera','id_alumno'];
    public function alumno() {
        return $this->belongsToMany('App\Modules\Alumno');
    }

    public function carrera() {
        return $this->belongsToMany('App\Modules\Carrera');
    }
}

