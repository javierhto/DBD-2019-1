<?php

namespace App;

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

    public function profesor() {
    	return $this->belongsToMany('App\Modules\Profesor', 'coordinacion_profesor');
    }

    public function horario() {
    	return $this->belongsToMany('App\Modules\Horario', 'coordinacion_horario');
    }
}
