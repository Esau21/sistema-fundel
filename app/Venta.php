<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
  protected $fillable=[
    'dcliente',
    'idusuario',
    'tipo_comprobante',
    'serie_comprobante',
    'num_comprobante',
    'fecha_hora',
    'impuesto',
    'total',
    'estado'
    ];
}
