<?php

namespace App\Modules;

use Illuminate\Database\Eloquent\Model;

class RegistroDeAccion extends Model
{
    //
    protected $table = 'registro_accion';
    protected $fillable =['rol','accion'];

    public function alumno() {
    	return $this->hasOne('App\Modules\Alumno');
    }
    public function profesor() {
    	return $this->hasOne('App\Modules\Profesor');
    }
    public function coordinador() {
    	return $this->hasOne('App\Modules\CoordinadorDocente');
    }
    public function admnistrador() {
    	return $this->hasOne('App\Modules\AdministradorGeneral');
    }
}
