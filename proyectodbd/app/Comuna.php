<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comuna extends Model
{
    //
    protected $table = 'comuna';
    protected $fillable =['nombre','id_region'];
    
    public function region() {
    	return $this->belongsTo('App\Region');
    }

    public function administradorGeneral() {
    	return $this->hasMany('App\AdministradorGeneral');
    }

    public function coordinadorDocente() {
    	return $this->hasMany('App\CoordinadorDocente');
    }

    public function alumno() {
    	return $this->hasMany('App\Alumno');
    }

    public function profesor() {
    	return $this->hasMany('App\Profesor');
    }
}
