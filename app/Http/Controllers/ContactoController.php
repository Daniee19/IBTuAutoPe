<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Contacto;

class ContactoController extends Controller
{
    public function enviar(Request $request)
    {
        $errores = [];
    
        if (!$this->validarCaptcha($request->input('g-recaptcha-response'), 'SECRET_KEY')) {
            $errores[] = "Verificar captcha";
        }
    
        $validator = Validator::make($request->all(), [
            'nombres' => 'required',
            'email' => 'required|email',
            'celular' => 'nullable|string|max:20',
            'razon' => 'required',
            'mensaje' => 'required',
        ]);
    
        if ($validator->fails()) {
            $errores = array_merge($errores, $validator->errors()->all());
            return back()->withErrors($errores)->withInput();
        }
    
        // Guardar en base de datos
        Contacto::create($request->only([
            'nombres', 'email', 'celular', 'razon', 'mensaje'
        ]));
    
        return redirect()->back()->with('exito', 'Tu mensaje ha sido enviado correctamente.');
    }

    private function validarCaptcha($token, $envKey) {
        $secret = env($envKey);
        $ip = request()->ip();
        $respuesta = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$token&remoteip=$ip");
        $atributos = json_decode($respuesta, true);
        return isset($atributos["success"]) && $atributos["success"];
    }
}
