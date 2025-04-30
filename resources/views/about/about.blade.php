<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/about.css', 'resources/js/about.js'])
    <title>About</title>
</head>
<body>
    <x-layout.navbar />
    <hr />

    <div class="header">
        <h1>¿Quiénes somos?</h1>
    </div>
    <section class="section-images">
        <div class="container">
            <img class="content inactive" src="{{ asset('images/img_logo.png') }}" alt="logo">
            <img class="content" src="{{ asset('images/img_logo.png') }}" alt="logo">
            <img class="content inactive" src="{{ asset('images/img_logo.png') }}" alt="logo">
        </div>
    </section>
    <section class="section-description">
        <div class="description">
            <p>
                En <strong>IBTUAUTOPE</strong>, somos un proyecto que nace con la pasión por el mundo automotriz. Nos especializamos en la venta de autos y motos, ofreciendo vehículos de calidad, seguros y a precios competitivos.
                Nuestra misión es conectar a nuestros clientes con el vehículo ideal, brindando asesoría personalizada y un servicio confiable desde el primer contacto.
                Aunque estamos dando nuestros primeros pasos, nuestro compromiso es ser una referencia de confianza en el sector automotor.
            </p>
        </div>
        <div class="btn-container">
            <a href="#" class="btn-ver">Contáctanos</a>
        </div>
    </section>
  

</body>
</html>
