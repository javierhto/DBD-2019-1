<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PlanDeEstudiosAsignatura extends Model
{
	protected $table = 'plan_estudios_asignatura';
    protected $fillable =['id_plan_estudios','id_asignatura'];    

    public function asignatura() {
    	return $this->belongsTo('App\Asignatura');
    }
    public function planEstudios() {
    	return $this->belongsTo('App\PlanDeEstudios');
    }
}
