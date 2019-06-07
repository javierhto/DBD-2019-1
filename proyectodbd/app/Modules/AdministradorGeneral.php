<?php

namespace App\Modules;

use Illuminate\Database\Eloquent\Model;

class AdministradorGeneral extends Model
{
    //
    protected $table = 'administrador_general';
    protected $fillable =['nombre','correo','direccion',
							'celular','contrasena','jornada','situacion',
							'fecha_ingreso','id_comuna'
							];

    public function comuna() {
    	return $this->belongsTo('App\Modules\Comuna');
    }
    public function registroAccion() {
    	return $this->belongsTo('App\Modules\RegistroDeAccion');
    }
}