<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evaluacion extends Model
{
    //
    protected $table = 'evaluacion';

    public function asignatura() {
    	return $this->belongsTo('App\Asignatura');
    }
}
