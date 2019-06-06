<?php

namespace App\Modules;

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
    	return $this->belongsTo('App\Modules\Comuna');
    }

    public function mensaje() {
    	return $this->hasMany('App\Modules\Mensaje');
    }

    public function historialProfesor() {
    	return $this->hasMany('App\Modules\HistorialProfesor');
    }

    public function coordinacion() {
    	return $this->belongsToMany('App\Modules\Coordinacion', 'coordinacion_profesor');
    }
}
