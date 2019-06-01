<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HistorialProfesor extends Model
{
    //
    protected $table = 'historial_profesor';

    public function profesor() {
    	return $this->belongsTo('App\Profesor');
    }
}
