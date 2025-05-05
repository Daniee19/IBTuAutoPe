<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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
            'razon' => 'required',
            'mensaje' => 'required',
        ]);

        if ($validator->fails()) {
            $errores = array_merge($errores, $validator->errors()->all());
        }

        return view('principal', ['errores' => $errores]);
    }

    private function validarCaptcha($token, $envKey) {
        $secret = env($envKey);
        $ip = request()->ip();
        $respuesta = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$token&remoteip=$ip");
        $atributos = json_decode($respuesta, true);
        return isset($atributos["success"]) && $atributos["success"];
    }
}
