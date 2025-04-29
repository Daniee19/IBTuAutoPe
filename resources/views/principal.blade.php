@extends("layout.index")
@section("content")

    <img class="img_auto_portada" src="{{ asset("images/carro_toyota_4k.jpg") }}" alt="auto.jpg">
    <section class="portada">
        <div class="frase_eslogan">
            <div>Calidad, seguridad y estilo en cada vehículo.</div>
            <div class="saber_mas">
                Saber más
            </div>
        </div>
        <div class="datos_portada">
            <div>
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
    </section>

@endsection