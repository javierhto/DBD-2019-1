<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profesor extends Model
{
    //
    protected $table = 'profesor';
    protected $fillable =['fecha_nacimiento','nombre','correo','direccion',
                            'telefono','celular','contrasena','jornada',
                            'situacion','fecha_ingreso','estado_cuenta','grado_academico',
                            'id_comuna'];

    //FALTA LA COORDINACION DEL PROFE

    public function comuna() {
    	return $this->belongsTo('App\Comuna');
    }

    public function mensaje() {
    	return $this->hasMany('App\Mensaje');
    }

    public function historialProfesor() {
    	return $this->hasMany('App\HistorialProfesor');
    }

    public function coordinacion() {
    	return $this->belongsToMany('App\Coordinacion', 'coordinacion_profesor');
    }
}
