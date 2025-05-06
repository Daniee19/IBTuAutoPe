<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehiculo;
class CatalogoController extends Controller
{

    //Se va a realizar el filtrado
    public function index(Request $request)
    {
        //Obtener el valor del select 'marca' SELECCIONADO
        $filtro = $request->input("marca");

        $vehiculos = "";

        if ($filtro) {
            //Vehiculo -> conecta con la tabla vehiculos y busca en la columna marca lo que tenga el dato $filtro y almacenalo en la variable $vehiculos.
            //Es sensible a las mayusculas, asi que ojo con el value de los options y a los datos que hay en la base de datos
            $vehiculos = Vehiculo::where('marca', $filtro)->get();

            //Por cierto para ver la bd, escribe: php artisan tinker
            //Y para ver todos los registros escribe: \App\Models\Vehiculo::all();
        } else {
            //Si no se seleccionó nada entonces muestra todo
            $vehiculos = Vehiculo::all();
        }

        return view("principal", ['vehiculos_filtro' => $vehiculos]);
    }


}
