<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Documento extends Model
{
    protected $table = 'documento';
    protected $fillable =['nombre','fecha','documento','id_asignatura'];
    
    public function asignatura() {
    	return $this->belongsTo('App\Asignatura');
    }
}
