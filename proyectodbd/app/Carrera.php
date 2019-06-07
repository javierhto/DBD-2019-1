<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carrera extends Model
{
    //
    protected $table = 'carrera';
    protected $fillable =['nombre','codigo_carrera','arancel',
                        'id_departamento'];

    public function planDeEstudios() {
    	return $this->hasMany('App\PlanDeEstudios');
    }

    public function coordinadorDocente() {
    	return $this->belongsTo('App\CoordinadorDocente');
    }

    public function alumnoYCarrera() {
    	return $this->hasMany('App\AlumnoYCarrera');
    }
}
