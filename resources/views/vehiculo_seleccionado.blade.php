@extends("components.layout.index")
@section("content")
<div class="detalle-vehiculo">
    <div class="contenedor-detalle">
        
        <!-- CARRUSEL DE IMÁGENES -->
        <div class="carrusel">
            <div class="imagenes">
                <img src="{{ asset('images/carro_selecionado/toyota_selecionado.png') }}" class="imagen activa" alt="Imagen 1">
                <img src="{{ asset('images/carro_selecionado/toyota_lateral.png') }}" class="imagen" alt="Imagen 2">
                <img src="{{ asset('images/carro_selecionado/toyota_atras.png') }}" class="imagen" alt="Imagen 3">
                <img src="{{ asset('images/carro_selecionado/timon_run.png') }}" class="imagen" alt="Imagen 4">
               
                <div class="controles-centro">
            <button class="btn-transparente" id="anterior">⟨</button>
            <div class="indicador-imagen" id="indicador">1</div>
            <button class="btn-transparente" id="siguiente">⟩</button>
                </div>



            </div>
            
        </div>

        <!-- INFO DEL VEHÍCULO - DEBE IR AQUÍ -->
        <div class="info">
            <span class="tipo">AUTOMÓVIL</span>
            <h2 class="marca">TOYOTA</h2>

            <div class="caracteristicas">
                <span class="caracteristica-box">2019</span>
                <span class="caracteristica-box">0km</span>
                <span class="caracteristica-box">Mecánica</span>
                <span class="caracteristica-box">Gasolina</span>
            </div>

            <p class="precio-label">Precio <span class="incluye">(Incluye IGV)</span></p>
            <p class="precio-monto">$ 9300</p>

            <button class="boton-comprar">Comprar</button>

            <div class="ubicacion">
                <i class="fa-solid fa-location-dot"></i> NARANJAL
            </div>
        </div>

    </div>
</div>

<!-- SCRIPT DEL CARRUSEL -->
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const imagenes = document.querySelectorAll('.imagen');
        const indicador = document.getElementById('indicador');
        let indice = 0;

        function mostrarImagen(i) {
            imagenes.forEach((img, idx) => {
                img.classList.remove('activa');
                if (idx === i) {
                    img.classList.add('activa');
                }
            });
            indicador.textContent = i + 1;
        }

        document.getElementById('siguiente').addEventListener('click', () => {
            indice = (indice + 1) % imagenes.length;
            mostrarImagen(indice);
        });

        document.getElementById('anterior').addEventListener('click', () => {
            indice = (indice - 1 + imagenes.length) % imagenes.length;
            mostrarImagen(indice);
        });

        mostrarImagen(indice);
    });
</script>


    <section class="section_información_detallada">
        <div class="container_informacion_detallada">
            <h3><i class="fa-solid fa-gear fa-xl" style="color: #e93600;"></i> General</h3>
            <div class="col">
                <div>
                    <h4>Año</h4>
                    <p>2019</p>
                </div>
                <div>
                    <h4>Kilometraje</h4>
                    <p>0km</p>
                </div>
                <div>
                    <h4>Transmisión</h4>
                    <p>Mecánica</p>
                </div>
                <div>
                    <h4>Combustible</h4>
                    <p>Gasolina</p>
                </div>
                <div>
                    <h4>Modelo</h4>
                    <p>Rush</p>
                </div>
                <div>
                    <h4>Color</h4>
                    <p>Rojo Mica Metálica</p>
                </div>
            </div>
            <h3><i class="fa-solid fa-square-plus fa-xl" style="color: #e93600;"></i> Equipamiento</h3>
            <div class="col">
                <div>
                    <p><i class="fa-solid fa-check" style="color: #000000;"></i> Aire acondicionado</p>
                </div>
                <div>
                    <p><i class="fa-solid fa-check" style="color: #000000;"></i> Calefactor</p>
                </div>
                <div>
                    <p><i class="fa-solid fa-check" style="color: #000000;"></i> Alzavidrios electrícos</p>
                </div>
            </div>
            <h3><i class="fa-solid fa-shield-halved fa-xl" style="color: #e93600;"></i> Seguridad</h3>
            <div class="col">
                <div>
                    <p><i class="fa-solid fa-check" style="color: #000000;"></i> Air Bags</p>
                </div>
            </div>
        </div>
    </section>
@endsection