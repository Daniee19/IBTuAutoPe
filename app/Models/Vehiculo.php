<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{
    //Para que al insertar... no pida que no se hayaron los campos de agregar y actualizar (que son formato timestamp)
    public $timestamps = false;
}
