<?php

namespace App\Modules;

use Illuminate\Database\Eloquent\Model;

class Asignatura extends Model
{
    //
    protected $table = 'asignatura';
    protected $fillable =['nombre','nivel','T',
                        'E','L'];
                        
    public function evaluacion() {
    	return $this->hasMany('App\Modules\Evaluacion');
    }

    public function prerequisito() {
    	return $this->hasMany('App\Modules\Prerequisito');
    }

    public function coordinacion() {
    	return $this->hasMany('App\Modules\Coordinacion');
    }

    public function planDeEstudios() {
    	return $this->belongsToMany('App\Modules\PlanDeEstudios', 'plan_estudios_asignatura');
    }
}
