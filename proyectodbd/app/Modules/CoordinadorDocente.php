<?php

namespace App\Modules;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class CoordinadorDocente extends Authenticatable
{
    use Notifiable;
    protected $guard ='coordinador';
    protected $table = 'coordinador_docente';
	protected $fillable =['direccion','telefono','celular','id_comuna'];


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
