<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Articulo extends Model
{
    protected $table = 'artículos';
    protected $primaryKey = "id";

    protected $fillable=[
        'Nombre_Articulo',
        'Precio',
        'pais_origen',
        'observaciones',
        'seccion'
    ];
}
