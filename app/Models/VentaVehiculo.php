<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VentaVehiculo extends Model
{
    protected $table = 'ventas_vehiculos'; // nombre real de la tabla
    protected $fillable = [
        'nombres',
        'apellidos',
        'email',
        'telefono',
        'tipo_documento',
        'marca',
        'modelo',
        'kilometraje',
        'anio_fabricacion',
        'placa',
        'mensaje',
        'archivo',
    ];
}
