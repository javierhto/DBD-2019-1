<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prerequisito extends Model
{
    //
	protected $table = 'prerequisito';

    public function asignatura() {
    	return $this->belongsTo('App\Asignatura');
    }
}
