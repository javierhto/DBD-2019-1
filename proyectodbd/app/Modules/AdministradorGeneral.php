<?php

namespace App\Modules;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class AdministradorGeneral extends Authenticatable
{
    use Notifiable;
    
    protected $guard ='admin';

    protected $table = 'administrador_general';
    protected $fillable =['direccion', 'celular','id_comuna','password','jornada',
                            'situacion','nombre','fecha_ingreso','email'];

    public function comuna() {
    	return $this->belongsTo('App\Modules\Comuna');
    }
    public function registroAccion() {
    	return $this->belongsTo('App\Modules\RegistroDeAccion');
    }
}