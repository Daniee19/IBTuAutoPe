@extends("components.layout.index")
@section("content")
    <section>
        <div class="container_catalogo">
            <div class="vehiculos">
                <h2>Vehiculos {{$f_tipo_v}}</h2>
                <div class="catalogo">
                    @if(!$vehiculos_filtro->isEmpty())
                        <!-- {{ count($vehiculos_filtro) }} -->
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
            </div>
        </div>
    </section>
@endsection