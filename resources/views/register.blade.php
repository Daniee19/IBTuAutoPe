@extends("components.layout.index")
@section("content")
<section style="background-color: white; display: flex; flex-direction: column; align-items: center; justify-content: center; padding: 100px 0;">
    @if (!empty($errores))
        <div class="contenedor_alerta">
            <div class="disenio_errores_index">
                @if(count($errores) == 1)
                    <h3>⚠️ Se encontró el siguiente error</h3>
                @elseif(count($errores) > 1)
                    <h3>⚠️ Se encontraron los siguientes errores</h3>
                @endif
                @foreach ($errores as $error)
                    <p>⚠️ {{ $error }}</p>
                @endforeach
            </div>
        </div>
    @endif

    <div class="container_formregister">
        <h2>Crea tu cuenta en TUAUTOPE</h2>
        <form action="{{ route('register') }}" method="POST">
            @csrf
            <div class="col-formregister-primario">

                <div class="fila-horizontal_register">
                    <div>
                        <h3>Email <strong style="color: red">*</strong></h3>
                        <input type="email" name="email" required>
                    </div>
                    <div>
                        <h3>Documento de Identidad <strong style="color: red">*</strong></h3>
                        <div style="display: flex; gap: 10px;">
                            <select name="tipo_documento" required>
                                <option value="DNI">DNI</option>
                                <option value="RUC">RUC</option>
                            </select>
                            <input type="text" name="numero_documento" required>
                        </div>
                    </div>
                </div>

                <div class="fila-horizontal_register">
                    <div>
                        <h3>Contraseña <strong style="color: red">*</strong></h3>
                        <div style="position: relative;">
                            <input type="password" name="password" id="register-password" required>
                            <i class="toggle-register-password bi bi-eye-slash" style="position: absolute; top: 50%; right: 10px; transform: translateY(-50%); cursor: pointer;"></i>

                        </div>
                        
                    </div>
                    <div>
                        <h3>Celular <strong style="color: red">*</strong></h3>
                        <input type="text" name="telefono" required>
                    </div>
                </div>

                <div class="fila-horizontal_register">
                    <div>
                        <h3>Nombre <strong style="color: red">*</strong></h3>
                        <input type="text" name="nombres" required>
                    </div>
                    <div>
                        <h3>Apellidos <strong style="color: red">*</strong></h3>
                        <input type="text" name="apellidos" required>
                    </div>
                </div>

                <div class="fila-horizontal_register">
                    <div>
                        <h3>Género</h3>
                        <label><input type="radio" name="genero" value="Masculino" checked required> Masculino</label>
                        <label><input type="radio" name="genero" value="Femenino"> Femenino</label>
                    </div>
                    <div>
                        <h3>Fecha de Nacimiento</h3>
                        <div class="fecha-nacimiento-group">
                            <select name="dia" required>@for($i=1; $i<=31; $i++) <option value="{{ $i }}">{{ $i }}</option>@endfor</select>
                            <select name="mes" required>
                                @foreach(['Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'] as $index => $mes)
                                    <option value="{{ $index+1 }}">{{ $mes }}</option>
                                @endforeach
                            </select>
                            <select name="anio" required>
                                @for($i = now()->year; $i >= 1900; $i--) <option value="{{ $i }}">{{ $i }}</option> @endfor
                            </select>
                        </div>
                    </div>
                </div>

                <div>
                    <label><input type="checkbox" name="privacidad" required> Acepto las <a href="#">Políticas de privacidad</a> de TuAutoPe</label><br>
                    <label><input type="checkbox" name="terminos" required> Acepto los <a href="#">Términos y condiciones</a> de TuAutoPe</label><br>
                    <label><input type="checkbox" name="fines_adicionales"> Autorizo el uso de mis datos para <a href="#">Fines adicionales</a></label>
                </div>

                <div class="g-recaptcha" data-sitekey="6Le8Fy4rAAAAAEzxAk1J8Bk7iE2KcvHNQ1F82Nxv"></div>

                <button type="submit">CREAR CUENTA</button>
            </div>
        </form>
        <div class="col-formregister-primario">
            <div>
                <h3>¿Ya tienes una cuenta? <a href="{{ route('login.form') }}" style="color: var(--naranja-principal);">Ingresa</a></h3> 
            </div>
        </div>
    </div>
</section>
@endsection