<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ingreso extends Model
{

      protected $fillable = [
        'nombre',
        'apellido',
        'dpi',
        'telefono',
        'correo',
        'direccion',
        'edad',
    ];
}
