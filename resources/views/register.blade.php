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
            <h2>Registrarse</h2>
            <form action="{{ route('register') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="col-formregister-primario">
                    <div class="fila-horizontal_register">
                        
                        <div>
                            <h3>Nombres:</h3>
                            <input type="text" name="nombres" required>
                        </div>
                        <div>
                            <h3>Apellidos:</h3>
                            <input type="text" name="apellidos" required>
                        </div>
                    </div>
                    <div class="fila-horizontal_register">
                        <div>
                            <h3>Telefono:</h3>
                            <input type="text" name="telefono" required>
                        </div>
                        <div>
                            <h3>Dirección:</h3>
                            <input type="text" name="direccion" required>
                        </div>
                    </div>
                    <div class="fila-horizontal_register">
                        <div>
                            <h3>Correo:</h3>
                            <input type="email" name="email" required>
                        </div>
                        <div>
                            <h3>Confirmar correo:</h3>
                            <input type="email" name="confirmar_email" required>
                        </div>
                    </div>
                    
                    
                    <div class="fila-horizontal_register">
                        <div>
                            <h3>Contraseña:</h3>
                            <input type="password" name="password" required>
                        </div>
                        <div>
                            <h3>Confirmar Contraseña:</h3>
                            <input type="password" name="confirmar_password" required>
                        </div>
                    </div>
                    
                    <div  style="margin-top: 10px; gap: 10px; text-align: center;">

                        <label for="checkbox_register"><input type="checkbox" id="checkbox_register" style="" required> Acepto los Terminos y Condiciones</label>

                    </div>
                </div>
           
                <div style="display: flex; align-items: center; justify-content: center; margin-top: 20px;">
                    <div class="g-recaptcha" data-sitekey="6Le8Fy4rAAAAAEzxAk1J8Bk7iE2KcvHNQ1F82Nxv"></div>
                </div>

                <button type="submit" name="registrarse">Registrarse</button>
            </form>
            <div class="col-formregister-primario">
                <div>
                    <h3>¿Ya tienes una cuenta? <a href="{{ route('login.form') }}" style="color: blue;">Login</a></h3> 
                </div>
            </div>
        </div>
    </section>
@endsection
