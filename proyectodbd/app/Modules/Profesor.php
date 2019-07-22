<?php

namespace App\Modules;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
class Profesor extends Authenticatable
{
    use Notifiable;
    protected $guard ='profesor';
    protected $table = 'profesor';
    protected $fillable =['nombre','email','direccion','celular','password','telefono','id_comuna',
                            'jornada','situacion','fecha_ingreso',
                            'fecha_nacimiento','estado_cuenta','grado_academico'];



    public function comuna() {
    	return $this->belongsTo('App\Modules\Comuna');
    }

    public function mensaje() {
    	return $this->hasMany('App\Modules\Mensaje');
    }

    public function historialProfesor() {
    	return $this->hasMany('App\Modules\HistorialProfesor');
    }

    public function coordinacionProfesor() {
    	return $this->hasMany('App\Modules\CoordinacionProfesor');
    }

    public function registroAccion() {
    	return $this->belongsTo('App\Modules\RegistroDeAccion');
    }

}
