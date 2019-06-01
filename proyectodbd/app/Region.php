<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    //
    protected $table = 'region';

    public function comuna() {
    	return $this->hasMany('App\Comuna');
    }
}
