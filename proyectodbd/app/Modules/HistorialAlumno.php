<?php

namespace App\Modules;

use Illuminate\Database\Eloquent\Model;

class HistorialAlumno extends Model
{
    //
    protected $table = 'historial_alumno';
    protected $fillable =['semestre','id_alumno','id_asignatura','id_profesor',
   					 'id_coordinacion'];
    
    public function alumno() {
    	return $this->belongsTo('App\Modules\Alumno');
    }
    public function asignatura() {
    	return $this->belongsTo('App\Modules\Asignatura');
    }
}
