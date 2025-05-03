<?php

use Illuminate\Support\Facades\Route;
use Dotenv\Dotenv;
Route::get('/', function () {
    return view('principal');
});

Route::get('/vehiculo_seleccionado', function () {
    return view('vehiculo_seleccionado');
});
Route::get('/blog', function () {
    return view('blog');
});
Route::get('/formventas', function () {
    return view('formventas');
});
Route::post('/principal', function () {

    $dotenv = Dotenv::createImmutable(__DIR__ . "/../");
    $dotenv->load();

    //Acceder a la variable de entorno
    $SECRET_KEY = getenv("SECRET_KEY");

    if (isset($_POST["enviar_contactanos"])) {
        $nombres = $_POST["nombres"];
        $email = $_POST["email"];
        $razon = $_POST["razon"];
        $mensaje = $_POST["mensaje"];

        //Te va a dar la ip del servidor
        $ip = $_SERVER["REMOTE_ADDR"];
        $captcha = $_POST["g-recaptcha-response"];

        $$respuesta = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$SECRET_KEY&response=$captcha&remoteip=$ip");

        $atributos = json_decode($respuesta, TRUE);

        //Array para detectar varios errores de los valores ingresados
        $errores = array();

        //En caso que no se haya marcado la casilla de no soy un robot o si detecta algo erróneo entonces mostrará este error
        if (!$atributos["success"]) {
            $errores[] = "Verificar captcha";
        }

        if (empty($nombres)) {
            $errores[] = "El campo nombre es obligatorio";
        }

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errores[] = "El correo electrónico no es correcto";
        }

        if (empty($razon)) {
            $errores[] = "El campo razón es obligatorio";
        }
        if (empty($mensaje)) {
            $errores[] = "El campo mensaje es obligatorio";
        }

    }

    return view('principal', ['errores' => $errores]);
});

Route::post('/formventas', function () {

    $dotenv = Dotenv::createImmutable(__DIR__ . "/../");
    $dotenv->load();

    //Acceder a la variable de entorno
    $SECRET_KEY = getenv("SECRET_KEY");

    if (isset($_POST["enviar"])) {
        $nombres = $_POST["nombres"];
        $apellidos = $_POST["apellidos"];
        $email = $_POST["email"];
        $telefono = $_POST["telefono"];
        $tipo_documento = $_POST["tipo_documento"];
        $marca = $_POST["marca"];
        $modelo = $_POST["modelo"];
        $kilometraje = $_POST["kilometraje"];
        $anio_fabricacion = $_POST["anio_fabricacion"];
        $placa = $_POST["placa"];
   
        $mensaje = $_POST["mensaje"];

        //Te va a dar la ip del servidor
        $ip = $_SERVER["REMOTE_ADDR"];
        $captcha = $_POST["g-recaptcha-response"];

        $respuesta = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$SECRET_KEY&response=$captcha&remoteip=$ip");

        $atributos = json_decode($respuesta, TRUE);

        //Array para detectar varios errores de los valores ingresados
        $errores = array();

        //En caso que no se haya marcado la casilla de no soy un robot o si detecta algo erróneo entonces mostrará este error
        if (!$atributos["success"]) {
            $errores[] = "Verificar captcha";
        }

        if (empty($nombres)) {
            $errores[] = "El campo nombres es obligatorio";
        }
        if (empty($apellidos)) {
            $errores[] = "El campo apellidos es obligatorio";
        }

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errores[] = "El correo electrónico no es correcto";
        }

        if (empty($telefono)) {
            $errores[] = "El campo telefono es obligatorio";
        }
        if (empty($tipo_documento)) {
            $errores[] = "El campo tipo documento es obligatorio";
        }
        if (empty($marca)) {
            $errores[] = "El campo marca es obligatorio";
        }
        if (empty($modelo)) {
            $errores[] = "El campo modelo es obligatorio";
        }
        if (empty($kilometraje)) {
            $errores[] = "El campo kilometraje es obligatorio";
        }
        if (empty($anio_fabricacion)) {
            $errores[] = "El campo año de fabricacion es obligatorio";
        }
        if (empty($placa)) {
            $errores[] = "El campo placa es obligatorio";
        }
        if (empty($mensaje)) {
            $errores[] = "El campo mensaje es obligatorio";
        }
  
    }

    return view('formventas', ['errores' => $errores]);
});
