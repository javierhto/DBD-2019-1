<?php

namespace App\Modules;

use Illuminate\Database\Eloquent\Model;

class AlumnoCoordinacion extends Model
{
    protected $table = 'alumno_coordinacion';
    protected $fillable =['id_alumno','id_coordinacion'];

    public function alumno() {
        return $this->belongsToMany('App\Modules\Alumno');
    }

    public function coordinacion() {
        return $this->belongsToMany('App\Modules\Coordinacion');
    }
}
