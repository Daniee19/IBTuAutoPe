@extends("components.layout.index")
@section("content")
    <section class="section_catalogo">
        <div class="catalogo_filtro_izq">
            @if(count($vehiculos_filtro) == 1)
                <h2>Vehiculo {{$f_tipo_v}}</h2>
            @elseif(count($vehiculos_filtro) == 0)
                <h2>No se encontraron vehículos</h2>
            @else
                @if ($f_tipo_v == null)
                    <h2>Vehiculos de cualquier tipo</h2>
                @else
                    <h2>Vehiculo {{$f_tipo_v}}s</h2>
                @endif

            @endif

            {{ count($vehiculos_filtro) }} resultados
        </div>
        <div class="catalogo_filtro_der">
            <p>Ordenar por más relevantes</p>
            <div class="container_catalogo">
                <div class="vehiculos">
                    @if(!$vehiculos_filtro->isEmpty())

                        @foreach($vehiculos_filtro as $v)
                            <div class="tarjeta">
                                <div class="imagen_car"><img src='{{ $v->foto }}' alt="Auto">
                                </div>
                                <div class="tarjeta_info">
                                    <p><strong>{{ $v->marca }} {{ $v->modelo }}</strong></p>
                                    <p>{{ $v->anio }} | {{ $v->transmision }} | {{ $v->combustible }}</p>
                                    <p><strong>${{ $v->precio }}</strong></p>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </section>
@endsection