<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <title>Blog</title>
    @vite("resources/css/blog.css")
    @vite("resources/js/app.js")
</head>
<body>
    <header class="nav_principal">
        <div>
            <img class="logo_icono" src="{{ asset("images/img_logo.png") }}" alt="logo">
        </div>
        <ul class="lista">
            <li class="x_panel"><i class="fa-solid fa-x fa-lg" style="color: #ffffff;"></i></li>
            <li><a href="/">Principal</a></li>
            <li><a href="#">Ventajas</a></li>
            <li><a href="#">Vehículos</a></li>
            <li><a href="#">¿Quiénes somos?</a></li>
            <li><a href="#">Blog</a></li>
            <li><a href="#">Contacto</a></li>
            <li><a href="#">Ubicación</a></li>
        </ul>
        <div class="icono_login_hamburguesa">
            <div class="i_text_login"><i class="fa-solid fa-right-to-bracket fa-xl" ></i>
                &nbsp;
                Login </div>
            <div class="iconito_hamburguesa"><i class="fa-solid fa-bars fa-2xl" ></i></div>
        </div>
        
    </header>
    <hr>
    

</body>
</html>