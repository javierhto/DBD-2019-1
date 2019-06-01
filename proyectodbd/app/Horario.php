<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Horario extends Model
{
    //
    protected $table = 'horario';

    public function coordinacion() {
    	return $this->belongsToMany('App\Coordinacion', 'coordinacion_horario');
    }
}
