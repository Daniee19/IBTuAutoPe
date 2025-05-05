@extends("components.layout.index")
@section("content")
   
    <section style="background-color: white; display: flex; flex-direction: column; align-items: center; justify-content: center; padding: 100px 0;">
        @if (session('success'))
            <div class="contenedor_alerta">
                <div class="disenio_errores_index" style="background-color: #d4edda; color: #155724; border-radius: 10px; padding: 10px;">
                    <p>✅ {{ session('success') }}</p>
                </div>
            </div>
        @endif
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
       
    
        <div class="container_formlogin">
            <h2>Iniciar sesion</h2>
            <form action="{{ route('login') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="col-formlogin-primario">
                
                    <div>
                        <h3>Correo:</h3>
                        <input type="email" name="email" required>
                    </div>
                    <div>
                        <h3>Contraseña:</h3>
                        <input type="password" name="password" required>
                    </div>
                    
                    
                </div>
           
                <div class="col-formlogin-primario">
                    {{-- <div>
                        <h3>Olvidaste tu contraseña? <a href="#" style="color: blue;">Recuperar</a></h3>
                    </div> --}}
                    <div>
                        <h3>¿No tienes cuenta?  <a href="/register" style="color: blue;">Registrate</a></h3>
                        
                    </div>
                    
                </div>
                <div style="display: flex; align-items: center; justify-content: center; margin-top: 20px;">
                    <div class="g-recaptcha" data-sitekey="6LcDFS4rAAAAAOGhHUwVPimMdms2gktLeEbLZFsl"></div>
                </div>

                <button type="submit" name="iniciar_sesion">Iniciar Sesión</button>
            </form>
        </div>
    </section>
@endsection
