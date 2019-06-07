<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AlumnoCarrera extends Model
{
	protected $table = 'alumno_carrera';
	protected $fillable =['id_carrera','id_alumno'];
    public function carrera() {
    	return $this->belongsTo('App\Carrera');
    }

    public function alumno() {
    	return $this->belongsTo('App\Alumno');
    }
}
