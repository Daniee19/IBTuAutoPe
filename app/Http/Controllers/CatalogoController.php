<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Vehiculo;
class CatalogoController extends Controller
{

    //Se va a realizar el filtrado
    public function index(Request $request)
    {
        //Obtener el valor del select 'marca' SELECCIONADO
        $f_marca = $request->input("marca"); //toyota
        $f_modelo = $request->input("modelo"); //collab
        $f_tipo_v = $request->input("tipo_vehiculo"); //nuevo

        $vehiculos = [];
        if ($f_marca === "Todos los modelos") {
            $f_marca = "";
        }
        if ($f_marca || $f_modelo || $f_tipo_v) {
            //Vehiculo -> conecta con la tabla vehiculos y busca en la columna marca lo que tenga el dato $filtro y almacenalo en la variable $vehiculos.
            //Es sensible a las mayusculas, asi que ojo con el value de los options y a los datos que hay en la base de datos
            $vehiculos = Vehiculo::orWhere('marca', $f_marca)
                ->orWhere("modelo", $f_modelo)
                ->orWhere("tipo_vehiculo", $f_tipo_v)
                ->paginate(5); // <-- retorna una colección, no se trabaja como array [se trabajan diferente, por ejemplo no usar empty(), sino usar _->isEmpty() para colecciones]
            //5 productos por página

            $vehiculos_cantidad_total = Vehiculo::orWhere('marca', $f_marca)
                ->orWhere("modelo", $f_modelo)
                ->orWhere("tipo_vehiculo", $f_tipo_v)
                ->get();
            //Por cierto para ver la bd, escribe: php artisan tinker
            //Y para ver todos los registros escribe: \App\Models\Vehiculo::all();
        } else {
            //Si no se seleccionó nada entonces muestra todo
            $vehiculos = Vehiculo::paginate(5);
            $vehiculos_cantidad_total = Vehiculo::all();
        }

        return view("catalogo_vehiculos", ['vehiculos_filtro' => $vehiculos, 'f_marca' => $f_marca, 'f_modelo' => $f_modelo, 'f_tipo_v_min' => Str::lower($f_tipo_v), 'f_tipo_v' => $f_tipo_v, 'vehiculos_cantidad_total' => $vehiculos_cantidad_total]);
    }


}
