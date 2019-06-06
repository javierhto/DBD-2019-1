<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PlanDeEstudios extends Model
{
    //
    protected $table = 'plan_estudios';
    protected $fillable =['semestre','version','id_carrera'];

    public function carrera() {
    	return $this->belongsTo('App\Modules\Carrera');
    }

    public function asignatura() {
    	return $this->belongsToMany('App\Modules\Asignatura', 'plan_estudios_asignatura');
    }
}
