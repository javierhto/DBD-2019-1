<?php

namespace App\Modules;

use Illuminate\Database\Eloquent\Model;

class RegistroDeAccion extends Model
{
    //
    protected $table = 'registro_accion';
    protected $fillable =['rol','accion'];

    //Por Corregir
}
