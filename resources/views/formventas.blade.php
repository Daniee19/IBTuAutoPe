@extends("components.layout.index")
@section("content")
<section style="background-color: white; display: flex; flex-direction: column; align-items: center; justify-content: center; padding: 100px 0;">
    @if (!empty($errores))
        <div class="contenedor_alerta">
            <div class="disenio_errores_index">
                <h3>⚠️ {{ count($errores) > 1 ? 'Se encontraron los siguientes errores' : 'Se encontró el siguiente error' }}</h3>
                @foreach ($errores as $error)
                    <p>⚠️ {{ $error }}</p>
                @endforeach
            </div>
        </div>
    @endif

    <div class="container_formventas">
        <h2>Formulario de Compra</h2>
        <form action="{{ route('formventas.procesar') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="col-formventas-primario">
                <div class="fila-horizontal">
                    <div>
                        <h3>Nombres:</h3>
                        <input type="text" name="nombres" required>
                    </div>
                    <div>
                        <h3>Apellidos:</h3>
                        <input type="text" name="apellidos" required>
                    </div>
                </div>

                <div class="fila-horizontal">
                    <div>
                        <h3>Correo:</h3>
                        <input type="email" name="email" required>
                    </div>
                    <div>
                        <h3>Teléfono:</h3>
                        <input type="text" name="telefono" required>
                    </div>
                </div>

                <div class="fila-horizontal">
                    <div>
                        <h3>Tipo de Documento:</h3>
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

                <div class="fila-horizontal">
                    <div>
                        <h3>Kilometraje:</h3>
                        <div style="display: flex; gap: 10px; align-items: center;">
                            <input type="text" name="kilometraje"> <span>km</span>
                        </div>
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

            <div>
                <h3>Tu mensaje:</h3>
                <textarea name="mensaje" placeholder="¿Cómo podemos ayudarte?"></textarea>
            </div>

            <label class="custom-file-upload">
                <input type="file" name="archivo">
                Elegir Archivos
            </label>

            <div style="display: flex; align-items: center; justify-content: center; margin-top: 20px;">
                <div class="g-recaptcha" data-sitekey="6Lf8nSwrAAAAANwBbn0kgj_hwZS_pIL-6bAZupes"></div>
            </div>

            <button type="submit" name="enviar">Enviar</button>
        </form>
    </div>
</section>
@endsection
