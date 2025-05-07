@extends("components.layout.index")
@section("content")
    @if (session('exito'))
        <div class="alerta_exito">
            <p>✅ {{ session('exito') }}</p>
        </div>
    @endif

    <img class="img_auto_portada" src="{{ asset("images/carro_toyota_4k.jpg") }}" alt="auto.jpg">

    <section class="portada" id="principal">
        <div class="frase_eslogan">
            <div>Calidad, seguridad y estilo en cada vehículo.</div>
            <div class="saber_mas">
                Saber más
            </div>
            <div class="datos_portada">
                <div>
                    <h4>+5</h4>
                    <p>Años de garantía</p>
                    <hr>
                    <h4>+100</h4>
                    <p>Modelos exclusivos</p>
                    <hr>
                    <h4>+100k</h4>
                    <p>Clientes satisfechos</p>
                    <hr>
                </div>
            </div>
        </div>
    </section>
    <section class="container_filtro" style="background: white" id="catalogo_vehiculos">
        <h2>Tenemos +2000 vehículos esperando por ti</h2>
        <div class="filtros">
            <div class="filtro_cabecera">
                <div>
                    <i class="fa-solid fa-car"></i>
                    Autos
                </div>
                <div><i class="fa-solid fa-motorcycle"></i> Motos</div>
                <div><i class="fa-solid fa-truck-front"></i> Camiones</div>
            </div>
            <!-- usa el .filtrar como llave -->
            <div class="filtro_contenido">
                <form method="GET" action="{{ route('filtrar') }}">
                    <div class="ordenar_filtros">
                        <div class="bloque_filtro">
                            <label>Tipo de vehículo</label>
                            <select name="tipo_vehiculo">
                                <option value="" selected>Todos los vehículos</option>
                                <option value="Toyota">Usados</option>
                                <option value="Mercedes">Seminuevos</option>
                                <option value="Honda">Nuevos</option>
                            </select>
                        </div>
                        <div class="bloque_filtro">
                            <label>Elegir marca</label>
                            <select name="marca">
                                <option value="" selected>Todas las Marcas</option>
                                <option value="Toyota">TOYOTA</option>
                                <option value="Mercedes">MERCEDES</option>
                                <option value="Honda">HONDA</option>
                                <option value="Suzuki">SUZUKI</option>
                                <option value="Kia">KIA</option>
                                <option value="Chevrolet">CHEVROLET</option>
                            </select>
                        </div>
                        <div class="bloque_filtro">
                            <label>Elegir modelo</label>
                            <select name="modelo">
                                <option value="">Todos los modelos</option>
                            </select>
                        </div>
                    </div>
                    <button type="submit">Filtrar</button>
                </form>
            </div>
        </div>

        <!-- <div class="container" style="background: white">
                                                                                                            <div class="vehiculos">
                                                                                                                <h2>Vehículos Disponibles</h2>
                                                                                                                <div class="catalogo">
                                                                                                                    @if(!empty($vehiculos_filtro))
                                                                                                                        @foreach($vehiculos_filtro as $v)
                                                                                                                            <div class="tarjeta">
                                                                                                                                <div class="imagen_car"><img src='{{ $v->foto }}' alt="Auto">
                                                                                                                                </div>
                                                                                                                                <p><strong>{{ $v->marca }}</strong></p>
                                                                                                                                <p>{{ $v->anio }} | {{ $v->transmision }} | {{ $v->combustible }}</p>
                                                                                                                                <p><strong>${{ $v->precio }}</strong></p>
                                                                                                                                <button>Ver más</button>
                                                                                                                            </div>
                                                                                                                        @endforeach
                                                                                                                    @endif

                                                                                                                </div>
                                                                                                            </div> -->
        </div>
    </section>

    <section style="background-color: white;" id="ventajas">
        <!-- Carrusel de marcas -->
        <section class="marcas-section">
            <h2>OFRECEMOS PRODUCTOS DE LAS MEJORES MARCAS</h2>
            <div class="marcas-container">
                <div id="carousel">
                    <template id="logo-template">
                        <img src="/images/honda.png" alt="Honda">
                        <img src="/images/toyota.png" alt="Toyota">
                        <img src="/images/yamaha.png" alt="Yamaha">
                        <img src="/images/chevrolet.png" alt="Chevrolet">
                        <img src="/images/zongshen.png" alt="Zongshen">
                        <img src="/images/suzuki.png" alt="Suzuki">
                        <img src="/images/wanxin.png" alt="Wanxin">
                        <img src="/images/kia.png" alt="Kia">
                    </template>
                </div>
            </div>
        </section>

        <!-- Ventajas -->
        <section class="ventajas-section">
            <h2>Ventajas únicas</h2>
            <div class="card-container">
                <div class="card">
                    <i class="bi bi-alarm"></i>
                    <h3>Ofrecemos hasta 5 años de garantía</h3>
                    <p>Todos nuestros vehículos cuentan con cobertura extendida para que manejes con total confianza y
                        respaldo.</p>
                </div>

                <div class="card orange">
                    <i class="ri-car-line"></i>
                    <h3>Brindamos +1000 modelos exclusivos</h3>
                    <p>Encuentra el auto perfecto dentro de nuestro amplio catálogo. Trabajamos con las mejores marcas y
                        modelos que se adaptan a tus gustos y necesidades.</p>
                </div>

                <div class="card">
                    <i class="fa-regular fa-face-smile"></i>
                    <h3>+100k Clientes satisfechos</h3>
                    <p>Nuestra experiencia y atención personalizada nos respaldan. Más de 100 mil clientes felices ya
                        confiaron en nosotros para adquirir su vehículo ideal.</p>
                </div>
            </div>

            <div class="btn-container">
                <a href="#" class="btn-ver">Ver vehículos</a>
            </div>
        </section>
    </section>
    <!--Catalogo-->

    <!--¿Quiénes somos?-->
    <section class="quienes_somos_section" id="quienes_somos">
        <div class="contenedor_qs">
            <div class="header_qs">
                <h1>¿Quiénes somos?</h1>
            </div>
            <section class="section-images">
                <div class="container_about">
                    <img class="content_about inactive" src="{{ asset('images/img_logo.png') }}" alt="logo">
                    <img class="content_about" src="{{ asset('images/img_logo.png') }}" alt="logo">
                    <img class="content_about inactive" src="{{ asset('images/img_logo.png') }}" alt="logo">
                </div>
            </section>
            <section class="section-description">
                <div class="description_about">
                    <p>
                        En <strong>IBTUAUTOPE</strong>, somos un proyecto que nace con la pasión por el mundo
                        automotriz.
                        Nos
                        especializamos en la venta de autos y motos, ofreciendo vehículos de calidad, seguros y a
                        precios
                        competitivos.
                        Nuestra misión es conectar a nuestros clientes con el vehículo ideal, brindando asesoría
                        personalizada y
                        un
                        servicio confiable desde el primer contacto.
                        Aunque estamos dando nuestros primeros pasos, nuestro compromiso es ser una referencia de
                        confianza
                        en
                        el
                        sector automotor.
                    </p>
                </div>
                <div class="btn-container">
                    <a href="#" class="btn-ver">Contáctanos</a>
                </div>
            </section>
        </div>
    </section>
    <!-- Blog -->

    <section class="blog" style="background: var(--gris-oscuro); flex-direction: column" id="blog">
        <h1>Ultima noticia destacada</h1>
        <div class="blog_contenedor">
            <div class="blog_contenido">
                <div class="blog_contenido_imagen">
                    <img src="{{ asset('images/honda_sorpresa.png') }}" alt="Blog Image">
                </div>
                <div class="blog_contenido_texto">
                    <h2>¡Honda prepara una sorpresa!</h2>
                    <p>Publicado: 10/02/2025</p>
                </div>
                <a href="https://publimotos.com/actualidad/mundo/honda-prepara-una-sorpresa-filtrado-el-diseno-de-su-nueva-moto/"
                    class="btn_leer_mas" target="_blank" rel="noopener noreferrer">Leer Más</a>

            </div>

            <div class="blog_contenido">
                <div class="blog_contenido_imagen">
                    <img src="{{ asset('images/top_autos_vendidos.png') }}" alt="Blog Image">
                </div>
                <div class="blog_contenido_texto">
                    <h2>Top autos mas vendidos en 2025</h2>
                    <p>Publicado: 02/04/2025</p>
                </div>
                <a href="https://www.coches.net/noticias/coches-mas-vendidos-2025" class="btn_leer_mas" target="_blank"
                    rel="noopener noreferrer">Leer Más</a>

            </div>
            <div class="blog_contenido">
                <div class="blog_contenido_imagen">
                    <img src="{{ asset('images/volkswagen_crisis.png') }}" alt="Blog Image">
                </div>
                <div class="blog_contenido_texto">
                    <h2>¿Volkswagen en crisis?</h2>
                    <p>Publicado: 02/12/2024</p>
                </div>
                <a href="https://www.bbc.com/mundo/articles/c8dqp0j7n3vo" class="btn_leer_mas" target="_blank"
                    rel="noopener noreferrer">
                    Leer Más
                </a>

            </div>
        </div>

    </section>

    <!--Contáctanos-->

    <section style="background-color: white;" id="contacto">


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


        <div class="container_contactanos">
            <h2>Formulario de contacto</h2>
            <form action="{{ route('contacto.enviar') }}" method="POST">
                @csrf
                <div class="col-contactanos-primario">
                    <div>
                        <h3>Nombres:</h3>
                        <input type="text" name="nombres">
                    </div>
                    <div>
                        <h3>Correo:</h3>
                        <input type="email" name="email">
                    </div>
                    <div>
                        <h3>Celular:</h3>
                        <input type="number" name="celular">
                    </div>
                    <div>
                        <h3>Razón:</h3>
                        <input type="text" name="razon">
                    </div>
                </div>
                <h3>Tu mensaje:</h3>
                <textarea placeholder="¿Cómo podemos ayudarte?" name="mensaje"></textarea>
                <!-- Captcha-->
                <div class="g-recaptcha" data-sitekey="6LfV4ikrAAAAAJ_fAq6lGuuq3NzBJ7Z4rZnPSJcA"> </div>
                <button type="submit" name="enviar_contactanos">Enviar</button>
            </form>
        </div>
    </section>


    <section class="section_ubicanos" id="ubicacion">
        <div class="contenedor_ubicanos">

            <div class="info_ubicanos">
                <h3>Encuentra nuestra ubicación</h3>
                <hr>
                <h4><i class="fa-solid fa-location-dot" style="color: #1e2a38;"></i> Dirección: </h4>
                <p>Av. Circunvalación Golf Los Incas Nro. 208, Torre 3, Oficina 602B , Santiago de Surco</p>
                <h4><i class="fa-solid fa-mobile" style="color: #1e2a38;"></i> Móvil:</h4>
                <p> (+51) 982 375 435</p>
                <h4><i class="fa-solid fa-envelope" style="color: #1e2a38;"></i> Correo: </h4>
                <p>ibtuautopel@corpibgroup.com</p>
                <h4><i class="fa-solid fa-calendar-days" style="color: #1e2a38;"></i> Horario: </h4>
                <p>Lunes - Viernes: 9am - 6pm</p>
                <p>Sábados: 9am - 3pm</p>
            </div>
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d26243.09045775808!2d-77.01873239959964!3d-12.108131566507778!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2spe!4v1746289524060!5m2!1ses-419!2spe"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>

@endsection