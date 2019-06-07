<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asignatura extends Model
{
    //
    protected $table = 'asignatura';
    protected $fillable =['nombre','nivel','T',
                        'E','L'];
                        
    public function evaluacion() {
    	return $this->hasMany('App\Evaluacion');
    }
    public function documento() {
        return $this->hasMany('App\Documento');
    }

    public function prerequisito() {
    	return $this->hasMany('App\Prerequisito');
    }

    public function coordinacion() {
    	return $this->hasMany('App\Coordinacion');
    }

    public function planDeEstudios() {
    	return $this->hasMany('App\PlanDeEstudiosAsignatura');
    }
}
