<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Facultad extends Model
{
    //
    protected $table = 'facultad';

    public function departamento() {
    	return $this->hasMany('App\Departamento');
    }
}
