<?php

namespace App\Modules;

use Illuminate\Database\Eloquent\Model;

class CoordinadorDocente extends Model
{
    //
    protected $table = 'coordinador_docente';
	protected $fillable =['nombre','fecha_nacimiento','correo','direccion',
							'telefono','celular','contrasena','jornada','situacion',
							'fecha_ingreso','estado_cuenta','id_comuna'
							];


    public function comuna() {
    	return $this->belongsTo('App\Modules\Comuna');
    }

    public function carrera() {
    	return $this->hasMany('App\Modules\Carrera');
    }

    public function registroAccion() {
    	return $this->belongsTo('App\Modules\RegistroDeAccion');
    }
}
