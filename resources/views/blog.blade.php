@extends("components.layout.index")
@section("content")

    <section class="blog">
        <div style="display: flex; flex-direction: column; align-items: center; justify-content: center;">
            <h1>Ultima noticia destacada</h1>
            <div class="blog_contenido">
                <div class="blog_contenido_imagen">
                    <img src="{{ asset('images/elon_nissan.png') }}" alt="Blog Image">
                </div>
                <div class="blog_contenido_texto">
                    <h2>¿Elon musk comprará Nissan?</h2>
                    <p>Publicado: 21/02/2025</p>
                </div>
                <a 
                    href="https://www.infobae.com/economia/2025/02/22/elon-musk-comprara-nissan-las-acciones-de-la-automotriz-subieron-luego-de-la-filtracion-de-un-informe-que-lo-sugeria/#:~:text=*%20Elon%20Musk%20dij
                    o%20que%20la%20vinculaci%C3%B3n,f%C3%A1brica%20es%20%C3%BAnica%20en%20el%20mundo%20automotriz.&text=*%20Luego%20de%20interrumpir%20la%20fusi%C3%B3n%20anunciada,sigue%20en%20negociaciones%20con%20otr
                    os%20posibles%20inversores." 
                    class="btn_leer_mas"
                    target="_blank" 
                    rel="noopener noreferrer"
                >Leer Más</a>

            </div>
        </div>
        
    </section>    
    <section class="blog" style="background: #1E2A38;">
        <div class="blog_contenido">
            <div class="blog_contenido_imagen">
                <img src="{{ asset('images/honda_sorpresa.png') }}" alt="Blog Image">
            </div>
            <div class="blog_contenido_texto">
                <h2>¡Honda prepara una sorpresa!</h2>
                <p>Publicado: 10/02/2025</p>
            </div>
            <a 
                href="https://publimotos.com/actualidad/mundo/honda-prepara-una-sorpresa-filtrado-el-diseno-de-su-nueva-moto/"
                class="btn_leer_mas" 
                target="_blank" 
                rel="noopener noreferrer"
            >Leer Más</a>

        </div>

        <div class="blog_contenido">
            <div class="blog_contenido_imagen">
                <img src="{{ asset('images/top_autos_vendidos.png') }}" alt="Blog Image">
            </div>
            <div class="blog_contenido_texto">
                <h2>Top autos mas vendidos en 2025</h2>
                <p>Publicado: 02/04/2025</p>
            </div>
            <a 
                href="https://www.coches.net/noticias/coches-mas-vendidos-2025" 
                class="btn_leer_mas" 
                target="_blank" 
                rel="noopener noreferrer"
            >Leer Más</a>

        </div>
        <div class="blog_contenido">
            <div class="blog_contenido_imagen">
                <img src="{{ asset('images/volkswagen_crisis.png') }}" alt="Blog Image">
            </div>
            <div class="blog_contenido_texto">
                <h2>¿Volkswagen en crisis?</h2>
                <p>Publicado: 02/12/2024</p>
            </div>
            <a 
                href="https://www.bbc.com/mundo/articles/c8dqp0j7n3vo" 
                class="btn_leer_mas"
                target="_blank" rel="noopener noreferrer"
            >
            Leer Más
            </a>

        </div>
    </section>   
@endsection