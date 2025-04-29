<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    @vite("resources/css/app.css")
    @vite("resources/js/app.js")
    <title>Document</title>
</head>

<body>

    <header class="nav_principal">
        <div>
            <img class="logo_icono" src="{{ asset("images/img_logo.png") }}" alt="logo">
        </div>
        <ul class="lista">
            <li class="x_panel"><i class="fa-solid fa-x fa-lg" style="color: #ffffff;"></i></li>
            <li>Principal</li>
            <li>Ventajas</li>
            <li>Vehículos</li>
            <li>¿Quiénes somos?</li>
            <li>Blog</li>
            <li>Contacto</li>
            <li>Ubicación</li>
        </ul>
        <div class="icono_login_hamburguesa">
            <div class="i_text_login"><i class="fa-solid fa-right-to-bracket fa-xl" style="color: #ffffff"></i>
                &nbsp;
                Login </div>
            <div class="iconito_hamburguesa"><i class="fa-solid fa-bars fa-2xl" style="color: #ffffff;"></i></div>
        </div>
    </header>

    <div id="overlay_blur"></div>

    <main>
        @yield("content")
    </main>

    <footer>
        <div class="footer-container">
            <div class="foot-primario">
                <h2>TuAutoPe</h2>
                <div>
                    <div class="redes_sociales">Visítanos tambien en:
                        <i class="fa-brands fa-facebook"></i><i class="fa-brands fa-linkedin"></i> <i
                            class="fa-brands fa-instagram"></i>
                        <i class="fa-brands fa-tiktok"></i>
                    </div>
                </div>
            </div>

            <div class="foot-secundario">
                <div class="footer-section">
                    <h3>ENCUENTRA EL AUTO SOÑADO</h3>
                    <p>Ibtuautope.com es una plataforma de venta de vehículos seminuevos totalmente digital.</p>
                </div>
                <div class="footer-section">
                    <h3>ATENCIÓN COMERCIAL</h3>
                    <p>Lunes - Viernes: 9am a 6pm</p>
                    <p>Sábados: 9am a 3pm</p>
                </div>
                <div class="footer-section">
                    <h3>ENCUÉNTRANOS</h3>
                    <p>Av. Circunvalación Golf Los Incas Nro. 208, Torre 3, Oficina 602B , Santiago de Surco</p>
                </div>
                <div class="footer-section">
                    <h3 style="color:var(--naranja-principal);">CONTÁCTANOS</h3>
                    <p>Móvil: (+51) 982 375 435</p>
                    <p>E-Mail: ibtuautopel@corpibgroup.com</p>
                </div>
            </div>
            <div class="foot-terciario">
                <h4>Concesionario TuAutoPe | Todos los derechos reservados © 2025</h4>
                <p>POLÍTICA DE PRIVACIDAD | TÉRMINOS Y CONDICIONES | TEXTO LEGAL DE CAMPAÑAS</p>
            </div>
        </div>
    </footer>

    <!-- Carrusel JS -->
    <script src="{{ asset('js/advantages.js') }}"></script>
    <script src=" https://kit.fontawesome.com/c353473263.js" crossorigin="anonymous">
    </script>

</body>

</html>