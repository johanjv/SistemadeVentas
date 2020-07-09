<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Facturacions extends Model
{

protected $fillable = [
    'cod_cliente',
    'cod_producto',
    'total',
    'fecha',
    'hora',
];

}