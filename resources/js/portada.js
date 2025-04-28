let imagen = document.querySelector(".img_auto_portada");

const imagenes = [
    '/images/carro_toyota_4k.jpg',
    "/images/moto_portada.jpg",
    "/images/carro_rojo_toyota.jpg",
]

let indice = 0;

setInterval(() => {
    //Desvanecer la imagen
    imagen.style.opacity = 0;

    setTimeout(() => {
        //Cambiar la imagen despues de desvanecer
        indice = (indice + 1) % imagenes.length;
        imagen.src = imagenes[indice];

        //Vuelve a aparecer
        imagen.style.opacity = 1;

    }, 800)

}, 6000);