<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Facultad extends Model
{
    //
    protected $table = 'facultad';
    protected $fillable =['nombre'];
    public function departamento() {
    	return $this->hasMany('App\Departamento');
    }
}
