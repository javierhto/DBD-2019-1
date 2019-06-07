<?php

namespace App\Modules;

use Illuminate\Database\Eloquent\Model;

class Coordinacion extends Model
{
    //
    protected $table = 'coordinacion';
    protected $fillable =['semestre','laboratorio','cupo',
                            'id_asignatura','id_profesor','id_alumno'
                            ];

    public function asignatura() {
    	return $this->belongsTo('App\Modules\Asignatura');
    }

    public function coordinacionProfesor() {
    	return $this->hasMany('App\Modules\CoordinacionProfesor');
    }

    public function coordinacionHorario() {
    	return $this->hasMany('App\Modules\CoordinacionHorario');
    }

    public function historialProfesor() {
    	return $this->belongsTo('App\Modules\HistorialProfesor');
    }

    public function historialAlumno() {
    	return $this->belongsTo('App\Modules\HistorialAlumno');
    }
}
