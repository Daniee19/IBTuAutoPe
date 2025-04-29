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
@endsection