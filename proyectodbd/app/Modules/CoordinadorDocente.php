<?php

namespace App\Modules;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class CoordinadorDocente extends Authenticatable
{
    use Notifiable;
    protected $guard ='coordinador';
    protected $table = 'coordinador_docente';
	protected $fillable =['nombre','fecha_nacimiento','email','direccion',
							'telefono','celular','password','jornada','situacion',
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
