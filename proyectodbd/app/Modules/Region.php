<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    //
    protected $table = 'region';
    protected $fillable =['nombre'];
    public function comuna() {
    	return $this->hasMany('App\Modules\Comuna');
    }
}
