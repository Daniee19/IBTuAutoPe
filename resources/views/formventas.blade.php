
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    @vite("resources/css/formventas.css")
    @vite("resources/js/app.js")
    <title>Form Ventas</title>
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
   
    


    <!--Contáctanos-->
    <section style="background-color: white;">

        @if (!empty($errores))
            <div class="contenedor_alerta">
                <div class="disenio_errores_index">
                    @if(count($errores) == 1)
                        <h3>⚠️ Se encontró el siguiente error </h3>
                    @elseif(count($errores) > 0)
                        <h3>⚠️ Se encontraron los siguientes errores </h3>
                    @endif
                    @foreach ($errores as $error)
                        <p>⚠️ {{ $error }}</p>
                    @endforeach
                </div>
            </div>
        @endif

        </div>
        <div class="container">
            <h2>Formulario de Compra</h2>
            <form action="formventas" method="POST">
                @csrf
                <div class="col-formventas-primario">
                    <div class="fila-horizontal">
                        <div>
                            <h3>Nombres:</h3>
                            <input type="text" name="nombres">
                        </div>
                        <div>
                            <h3>Apellidos:</h3>
                            <input type="text" name="apellidos">
                        </div>
                    </div>
                    <div class="fila-horizontal">
                        <div>
                            <h3>Correo:</h3>
                            <input type="email" name="email">
                        </div>
                        <div>
                            <h3>Telefono:</h3>
                            <input type="text" name="telefono">
                        </div>
                    </div>
                
                    <div class="fila-horizontal">
                        <div>
                            <h3>Tipo documento:</h3>
                            <input type="text" name="tipo_documento">
                        </div>
                        <div>
                            <h3>Marca:</h3>
                            <input type="text" name="marca">
                        </div>
                        <div>
                            <h3>Modelo:</h3>
                            <input type="text" name="modelo">
                        </div>
                  
                    </div>
                    <div class="fila-kilometraje">
                        <div>
                            <h3>Kilometraje:</h3>
                        
                            <label style="display: flex; gap: 10px; align-items: center; justify-content: center;">
                                <input type="text" name="kilometraje">
                                km
                            </label>
                           
                        </div>
                        <div>
                            <h3>Año de Fabricación:</h3>
                            <input type="text" name="anio_fabricacion">
                        </div>
                        <div>
                            <h3>Placa:</h3>
                            <input type="text" name="placa">
                        </div>
                    </div>
                  
                    
                </div>
                
                <h3>Tu mensaje:</h3>
                <textarea placeholder="¿Cómo podemos ayudarte?" name="mensaje"></textarea>

                <label class="custom-file-upload">
                    <input type="file" name="archivo" />
                    Elegir Archivos
                </label>
                
                
                <!-- Captcha-->
                <div style="display: flex; align-items: center; justify-content: center;">
                    <div class="g-recaptcha" data-sitekey="6Lf8nSwrAAAAANwBbn0kgj_hwZS_pIL-6bAZupes" > </div>
                </div>
                
                <button type="submit" name="enviar" style="display: block">Enviar</button>
            </form>
        </div>
    </section>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</body>
</html>