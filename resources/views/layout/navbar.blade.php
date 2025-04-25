<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite("resources/css/app.css")
    @vite("resources/js/app.js")
    <title>Document</title>
</head>

<body>
    <nav class="nav_principal">
        <div>
            <img class="logo_icono" src="{{ asset("images/img_logo.png") }}" alt="logo">
        </div>
        <ul class="lista">
            <li class="x_panel"><i class="fa-solid fa-x fa-lg" style="color: #000000;"></i></li>
            <li>Principal</li>
            <li>Ventajas</li>
            <li>Vehículos</li>
            <li>¿Quiénes somos?</li>
            <li>Blog</li>
            <li>Contacto</li>
            <li>Ubicación</li>
        </ul>
        <div class="icono_login_hamburguesa">
            <div><i class="fa-solid fa-right-to-bracket"></i> Login </div>
            <div class="iconito_hamburguesa"><i class="fa-solid fa-bars fa-2xl" style="color: #000000;"></i></div>
        </div>
    </nav>
    <script src="https://kit.fontawesome.com/c353473263.js" crossorigin="anonymous"></script>

</body>

</html>