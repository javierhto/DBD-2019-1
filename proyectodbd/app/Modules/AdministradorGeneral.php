<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdministradorGeneral extends Model
{
    //
    protected $table = 'administrador_general';
    protected $fillable =['nombre','correo','direccion',
							'celular','contrasena','jornada','situacion',
							'fecha_ingreso','id_comuna'
							];

//NO ME PERMITE COLOCAR LAS COMUNAS, REVISAR.

    public function comuna() {
    	return $this->belongsTo('App\Modules\Comuna');
    }
}