<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prerequisito extends Model
{
    //
	protected $table = 'prerequisito';
	protected $fillable =['nombre','nivel','id_asignatura'];

    public function asignatura() {
    	return $this->belongsTo('App\Modules\Asignatura');
    }
}
