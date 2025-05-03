@extends("components.layout.index")
@section("content")

    <img class="img_auto_portada" src="{{ asset("images/carro_toyota_4k.jpg") }}" alt="auto.jpg">
    <section class="portada">
        <div class="frase_eslogan">
            <div>Calidad, seguridad y estilo en cada vehículo.</div>
            <div class="saber_mas">
                Saber más
            </div>
        </div>
        <div class="datos_portada">
            <div>
                <div>
                    <span>+5</span> <br>
                    Años de garantía
                    <hr>
                </div>
                <div>
                    <span>+100</span> <br>
                    Modelos exclusivos
                    <hr>
                </div>
                <div>
                    <span>+100k</span> <br>
                    Clientes satisfechos 
                    <hr>
                </div>
            </div>
        </div>
    </section>
    <section style="background-color: white;">
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
    <div class="container" style="background: white">
            <!--Catalogo-->
        <div class="filtros">
            <h3>Buscar Filtros</h3>
            <form>
                <label>Marca:</label>
                <select name="marca">
                    <option value="">Seleccionar Marca</option>
                </select>

                <label>Modelo:</label>
                <select name="modelo">
                    <option value="">Seleccionar Modelo</option>
                </select>

                <label>Año:</label>
                <input type="number" name="año">

                <label>Hasta:</label>
                <input type="number" name="hasta">

                <button type="submit">Filtrar</button>
            </form>
        </div>

        <div class="container" style="background: white">
        <div class="vehiculos">
            <h2>Vehículos Disponibles</h2>
            <div class="catalogo">
                <div class="tarjeta">
                    <div class="imagen_car"><img src="{{ asset("images/catalogo/toyota_rarrr.png") }}" alt="Auto"> </div>
                    <p><strong>TOYOTA</strong></p>
                    <p>2019 | Mecánica | Gasolina</p>
                    <p><strong>$9300</strong></p>
                    <button>Ver más</button>
                </div>
                <div class="tarjeta">
                    <div class="imagen_car"> <img src="{{ asset("images/catalogo/mercedes_run.png") }}" alt="Auto"></div>
                    <p><strong>MERCEDES</strong></p>
                    <p>2017 | Mecánica | Gasolina</p>
                    <p><strong>$11300</strong></p>
                    <button>Ver más</button>
                </div>
                <div class="tarjeta">
                    <div class="imagen_car"><img src="{{ asset("images/catalogo/honda_ron.png") }}" alt="Auto"></div>
                    <p><strong>HONDA</strong></p>
                    <p>2018 | Mecánica | Gasolina</p>
                    <p><strong>$10300</strong></p>
                    <button>Ver más</button>
                </div>
                <div class="tarjeta">
                <div class="imagen_car"><img src="{{ asset("images/catalogo/suzuki_rar.png") }}"alt="Auto"></div>
                    <p><strong>SUZUKI</strong></p>
                    <p>2020 | Mecánica | Gasolina</p>
                    <p><strong>$12000</strong></p>
                    <button>Ver más</button>
                </div>
                <div class="tarjeta">
                    <div class="imagen_car"> <img src="{{ asset("images/catalogo/kia_rioo.png") }}" alt="Auto"></div>
                    <p><strong>Kia</strong></p>
                    <p>2023 | Mecánica | Gasolina</p>
                    <p><strong>$11700</strong></p>
                    <button>Ver más</button>
                </div>
                <div class="tarjeta">
                    <div class="imagen_car"> <img src="{{ asset("images/catalogo/chevrolet_tu.png") }}" alt="Auto"></div>
                    <p><strong>CHEVROLET</strong></p>
                    <p>2021 | Mecánica | Gasolina</p>
                    <p><strong>$15900</strong></p>
                    <button>Ver más</button>
                </div>
                
            </div>
        </div>
        </div>
    </div>

    <!--¿Quiénes somos?-->
    <section class="quienes_somos_section">
        <div class="contenedor_qs">
            <div class="header_qs">
                <h1>¿Quiénes somos?</h1>
            </div>
            <section class="section-images">
                <div class="container">
                    <img class="content inactive" src="{{ asset('images/img_logo.png') }}" alt="logo">
                    <img class="content" src="{{ asset('images/img_logo.png') }}" alt="logo">
                    <img class="content inactive" src="{{ asset('images/img_logo.png') }}" alt="logo">
                </div>
            </section>
            <section class="section-description">
                <div class="description">
                    <p>
                        En <strong>IBTUAUTOPE</strong>, somos un proyecto que nace con la pasión por el mundo automotriz.
                        Nos
                        especializamos en la venta de autos y motos, ofreciendo vehículos de calidad, seguros y a precios
                        competitivos.
                        Nuestra misión es conectar a nuestros clientes con el vehículo ideal, brindando asesoría
                        personalizada y
                        un
                        servicio confiable desde el primer contacto.
                        Aunque estamos dando nuestros primeros pasos, nuestro compromiso es ser una referencia de confianza
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
        <div class="container_contactanos">
            <h2>Formulario de contacto</h2>
            <form action="principal" method="POST">
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
@endsection