<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    //
    protected $table = 'alumno';
    
    public function comuna() {
    	return $this->belongsTo('App\Comuna');
    }

    public function tarjetaCredito() {
    	return $this->hasMany('App\TarjetaCredito');
    }

    public function facturacion() {
    	return $this->hasMany('App\Facturacion');
    }

    public function historialAlumno() {
    	return $this->hasMany('App\HistorialAlumno');
    }

    public function mensaje() {
    	return $this->hasMany('App\Mensaje');
    }

    public function carrera() {
    	return $this->belongsToMany('App\Carrera', 'alumno_carrera');
    }
}
