<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    
    public function loginForm() {
        if (Session::has('usuario_logueado')) {
            return redirect('/')->with('success', 'Ya iniciaste sesión.');
        }
        return view('login');
    }

    public function registerForm() {
        return view('register');
    }

    public function login(Request $request) {
        $errores = [];

        if (!$this->validarCaptcha($request->input('g-recaptcha-response'), 'SECRET_KEY_LOGIN')) {
            $errores[] = "Verificar captcha";
        }

        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            $errores = array_merge($errores, $validator->errors()->all());
        }

        if (!empty($errores)) {
            return view('login', ['errores' => $errores]);
        }

        $usuario = User::where('email', $request->email)->first();

        if (!$usuario || !Hash::check($request->password, $usuario->password)) {
            return view('login', ['errores' => ['Credenciales inválidas']]);
        }

        Session::put('usuario_logueado', true);
        Session::put('usuario_nombre', $usuario->nombres ?? $usuario->name);
        Session::put('usuario_id', $usuario->id);

        return redirect('/')->with('success', 'Inicio de sesión exitoso.');
    }
    
    public function register(Request $request) {
        $errores = [];
    
        if (!$this->validarCaptcha($request->input('g-recaptcha-response'), 'SECRET_KEY_REGISTER')) {
            $errores[] = "Verificar captcha";
        }
    
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'tipo_documento' => 'required|in:DNI,RUC',
            'numero_documento' => 'required',
            'password' => 'required|min:6',
            'telefono' => 'required',
            'nombres' => 'required',
            'apellidos' => 'required',
            'genero' => 'required|in:Masculino,Femenino',
            'dia' => 'required|numeric|min:1|max:31',
            'mes' => 'required|numeric|min:1|max:12',
            'anio' => 'required|numeric|min:1900|max:' . now()->year,
            'privacidad' => 'accepted',
            'terminos' => 'accepted',
        ]);
    
        if ($validator->fails()) {
            $errores = array_merge($errores, $validator->errors()->all());
        }
    
        if (!empty($errores)) {
            return view('register', ['errores' => $errores]);
        }
    
        $fechaNacimiento = $request->anio . '-' . str_pad($request->mes, 2, '0', STR_PAD_LEFT) . '-' . str_pad($request->dia, 2, '0', STR_PAD_LEFT);
    
        User::create([
            'email' => $request->email,
            'tipo_documento' => $request->tipo_documento,
            'numero_documento' => $request->numero_documento,
            'password' => Hash::make($request->password),
            'telefono' => $request->telefono,
            'nombres' => $request->nombres,
            'apellidos' => $request->apellidos,
            'genero' => $request->genero,
            'fecha_nacimiento' => $fechaNacimiento,
            'fines_adicionales' => $request->has('fines_adicionales'),
        ]);
    
        return redirect('/login')->with('success', 'Usuario registrado correctamente.');
    }
    
    public function logout() {
        Session::flush();
        return redirect('/')->with('success', 'Sesión cerrada correctamente.');
    }

    private function validarCaptcha($token, $envKey) {
        $secret = env($envKey);
        $ip = request()->ip();
        $respuesta = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$token&remoteip=$ip");
        $atributos = json_decode($respuesta, true);
        return isset($atributos["success"]) && $atributos["success"];
    }
}
