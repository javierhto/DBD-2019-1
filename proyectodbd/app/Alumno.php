<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    //
    return $this->hasMany(Facturacion::class);
    return $this->hasMany(TarjetaCredito::class);
}
