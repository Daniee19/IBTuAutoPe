@extends("components.layout.index")
@section("content")
    <section class="section_catalogo">
        <div class="catalogo_filtro_izq">
            <div>
                @if(count($vehiculos_cantidad_total) == 1)
                    <h2 class="tipo_vehiculo_titulo">Vehiculo {{$f_tipo_v_min}}</h2>
                @elseif(count($vehiculos_cantidad_total) == 0)
                    <h2 class="tipo_vehiculo_titulo">No se encontraron vehículos</h2>
                @else
                    @if ($f_tipo_v_min == null)
                        <h2 class="tipo_vehiculo_titulo">Vehiculos de cualquier tipo</h2>
                    @else
                        <h2 class="tipo_vehiculo_titulo">Vehiculos {{$f_tipo_v_min}}s</h2>
                    @endif
                @endif

                <p class="cantidad_vehiculos">{{ count($vehiculos_cantidad_total) }} resultados</p>
            </div>
            <div class="filtros_especificos_trash">
                <h3>Filtros</h3>
                <div class="iconitos_close_trash">
                    <i class="fa-regular fa-trash-can fa-lg" style="color: #000000;"></i><i class="fa-solid fa-x icono_x"
                        style="color: #000000;"></i>
                </div>
            </div>

            <div class="filtro_botones_filtros">
                @if ($f_tipo_v != "")
                    <div>{{ $f_tipo_v }}</div>
                @endif
                @if ($f_marca != "")
                    <div>{{ $f_marca }}</div>
                @endif
                @if ($f_modelo != "")
                    <div>{{ $f_modelo }}</div>
                @endif
            </div>

        </div>
        <div class="catalogo_filtro_der">

            <div class="texto_incorporado1">
                <div class="icono_open_filtros">
                    <i class=" fa-regular fa-newspaper fa-2xl" style="color: #000000;"></i>
                </div>
                <p class="catalogo_info_tipo_vehiculo">
                    Vehiculos
                </p>
            </div>
            <div class="texto_incorporado2">
                <div>{{ count($vehiculos_cantidad_total) }} resultados</div>
                <p>Ordenar por más relevantes</p>
            </div>
            <div class="container_catalogo">
                <div class="vehiculos">
                    @if(!$vehiculos_filtro->isEmpty())

                        @foreach($vehiculos_filtro as $v)
                            <div class="tarjeta">
                                <div class="imagen_car"><img src='{{ $v->foto }}' alt="Auto">
                                </div>
                                <div class="tarjeta_info">
                                    <p>{{ $v->marca }} {{ $v->modelo }}</p>
                                    <p>{{ $v->anio }} | {{ $v->transmision }} | {{ $v->combustible }}</p>
                                    <p><strong>${{ $v->precio }}</strong></p>
                                </div>
                            </div>
                        @endforeach
                    @endif
                    <!-- Paginación-->
                    <div style="margin-top:20px;">
                        {{ $vehiculos_filtro->links() }}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection