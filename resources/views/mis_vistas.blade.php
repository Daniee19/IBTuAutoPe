@extends("components.layout.index")
@section("content")
<div class="contenedor">
        <div class="encabezado">
            <h2>Mis anuncios</h2>
            <div class="acciones">
                <button class="btn-agregar">
                    Agregar <span class="icono">➕</span>
                </button>
                <div class="buscador">
                    <input type="text" placeholder="Buscar">
                    <span class="icono-lupa">🔍</span>
                </div>
                <span class="contador">(20) Vehículos</span>
            </div>
        </div>

        <div class="grilla-anuncios">
            
            <div class="tarjeta">
                <div class="imagen-auto"></div>
                <div class="info-auto">
                    <p class="modelo">Agya</p>
                    <p class="precio">S/ 520</p>
                    <p class="detalles">2019 | 75,000 km | Mecánico<br>Gasolina</p>
                    <button class="btn-editar">Editar</button>
                </div>
            </div>

            
            <div class="tarjeta">
                <div class="imagen-auto"></div>
                <div class="info-auto">
                    <p class="modelo">Agya</p>
                    <p class="precio">S/ 520</p>
                    <p class="detalles">2019 | 75,000 km | Mecánico<br>Gasolina</p>
                    <button class="btn-editar">Editar</button>
                </div>
            </div>
           
        </div>
    </div>

@endsection
