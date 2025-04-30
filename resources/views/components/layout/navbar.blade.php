<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite("resources/css/app.css")
    <title>Document</title>
</head>

<body>
    <nav class="nav_principal">
        <div>
            <img class="logo_icono" src="{{ asset("images/img_logo.png") }}" alt="logo">
        </div>
        <ul>
            <li><a href="/">Principal</a></li>
            <li><a href="{{ route('advantages') }}">Ventajas</a></li>
            <li><a href="#">Vehículos</a></li>
            <li><a href="{{ route('about') }}">¿Quiénes somos?</a></li>
            <li><a href="#">Blog</a></li>
            <li><a href="#">Contacto</a></li>
            <li><a href="#">Ubicación</a></li>
        </ul>
        
        <div>
            <span>Login <i class="fa-solid fa-right-to-bracket"></i></span>
        </div>
    </nav>
    <script src="https://kit.fontawesome.com/c353473263.js" crossorigin="anonymous"></script>
</body>

</html>