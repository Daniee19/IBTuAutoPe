<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use App\Models\VentaVehiculo;

class VentaVehiculoController extends Controller
{
    public function procesar(Request $request)
    {
        $errores = [];

        if (!$this->validarCaptcha($request->input('g-recaptcha-response'), 'SECRET_KEY')) {
            $errores[] = "Verificar captcha";
        }

        $validator = Validator::make($request->all(), [
            'nombres' => 'required|string|max:100',
            'apellidos' => 'required|string|max:100',
            'email' => 'required|email',
            'telefono' => 'required|string|max:20',
            'tipo_documento' => 'required|string|max:20',
            'marca' => 'required|string|max:100',
            'modelo' => 'required|string|max:100',
            'kilometraje' => 'required|numeric|min:0',
            'anio_fabricacion' => 'required|digits:4|integer|min:1900|max:' . date('Y'),
            'placa' => 'required|string|max:20',
            'mensaje' => 'required|string|max:1000',
            'archivo' => 'nullable|file|max:5120' // 5MB máx
        ]);

        if ($validator->fails()) {
            $errores = array_merge($errores, $validator->errors()->all());
            return view('formventas', ['errores' => $errores]);
        }

        $archivoNombre = null;
        if ($request->hasFile('archivo')) {
            $archivoNombre = $request->file('archivo')->store('archivos_ventas', 'public');
        }

        VentaVehiculo::create([
            'nombres' => $request->nombres,
            'apellidos' => $request->apellidos,
            'email' => $request->email,
            'telefono' => $request->telefono,
            'tipo_documento' => $request->tipo_documento,
            'marca' => $request->marca,
            'modelo' => $request->modelo,
            'kilometraje' => $request->kilometraje,
            'anio_fabricacion' => $request->anio_fabricacion,
            'placa' => $request->placa,
            'mensaje' => $request->mensaje,
            'archivo' => $archivoNombre,
        ]);

        return redirect('/')->with('success', 'Formulario enviado correctamente.');
    }

    private function validarCaptcha($token, $envKey)
    {
        $secret = env($envKey);
        $ip = request()->ip();
        $respuesta = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$token&remoteip=$ip");
        $atributos = json_decode($respuesta, true);
        return isset($atributos["success"]) && $atributos["success"];
    }
}
