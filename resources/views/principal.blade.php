@extends("layout.navbar")
@section("content")
    <div >
        <img class="img_auto_portada" src="{{ asset("images/carro_toyota_4k.jpg") }}" alt="auto.jpg">
        <div class="frase_eslogan">
            <div class="">Calidad, seguridad y estilo en cada vehículo.</div>
            <div class="saber_mas">
                Saber más
            </div>
        </div>
        <div class="datos_portada">
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
@endsection