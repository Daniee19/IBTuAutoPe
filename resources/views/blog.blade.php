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
    <h1>Ultima noticia destacada</h1>

    <section class="blog">
        
        <div class="blog_contenido">
            <div class="blog_contenido_imagen">
                <img src="{{ asset('images/elon_nissan.png') }}" alt="Blog Image">
            </div>
            <div class="blog_contenido_texto">
                <h2>¿Elon musk comprará Nissan?</h2>
                <p>Publicado: 21/02/2025</p>
            </div>
            <a 
                href="https://www.infobae.com/economia/2025/02/22/elon-musk-comprara-nissan-las-acciones-de-la-automotriz-subieron-luego-de-la-filtracion-de-un-informe-que-lo-sugeria/#:~:text=*%20Elon%20Musk%20dij
                o%20que%20la%20vinculaci%C3%B3n,f%C3%A1brica%20es%20%C3%BAnica%20en%20el%20mundo%20automotriz.&text=*%20Luego%20de%20interrumpir%20la%20fusi%C3%B3n%20anunciada,sigue%20en%20negociaciones%20con%20otr
                os%20posibles%20inversores." 
                class="btn_leer_mas"
                target="_blank" 
                rel="noopener noreferrer"
            >Leer Más</a>

        </div>
    </section>    
    <section class="blog" style="background: #1E2A38;">
        <div class="blog_contenido">
            <div class="blog_contenido_imagen">
                <img src="{{ asset('images/honda_sorpresa.png') }}" alt="Blog Image">
            </div>
            <div class="blog_contenido_texto">
                <h2>¡Honda prepara una sorpresa!</h2>
                <p>Publicado: 10/02/2025</p>
            </div>
            <a 
                href="https://publimotos.com/actualidad/mundo/honda-prepara-una-sorpresa-filtrado-el-diseno-de-su-nueva-moto/"
                class="btn_leer_mas" 
                target="_blank" 
                rel="noopener noreferrer"
            >Leer Más</a>

        </div>

        <div class="blog_contenido">
            <div class="blog_contenido_imagen">
                <img src="{{ asset('images/top_autos_vendidos.png') }}" alt="Blog Image">
            </div>
            <div class="blog_contenido_texto">
                <h2>Top autos mas vendidos en 2025</h2>
                <p>Publicado: 02/04/2025</p>
            </div>
            <a 
                href="https://www.coches.net/noticias/coches-mas-vendidos-2025" 
                class="btn_leer_mas" 
                target="_blank" 
                rel="noopener noreferrer"
            >Leer Más</a>

        </div>
        <div class="blog_contenido">
            <div class="blog_contenido_imagen">
                <img src="{{ asset('images/volkswagen_crisis.png') }}" alt="Blog Image">
            </div>
            <div class="blog_contenido_texto">
                <h2>¿Volkswagen en crisis?</h2>
                <p>Publicado: 02/12/2024</p>
            </div>
            <a 
                href="https://www.bbc.com/mundo/articles/c8dqp0j7n3vo" 
                class="btn_leer_mas"
                target="_blank" rel="noopener noreferrer"
            >
            Leer Más
            </a>

        </div>
    </section>   

</body>
</html>