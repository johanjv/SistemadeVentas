<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{

protected $fillable = [
    'nombres',
    'apellidos',
    'cedula',
    'direccion',
    'tlf',
    'correo',
];

}