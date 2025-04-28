let imagen = document.querySelector(".img_auto_portada");

const imagenes = [
    '/images/carro_toyota_4k.jpg',
    "/images/moto_portada.jpg",
    "/images/carro_rojo_toyota.jpg",
]

let indice = 0;

//Cada 6 segundos se cambiará la imagen del array "imagenes"
setInterval(() => {
    //Cambiar la imagen despues de desvanecer
    indice = (indice + 1) % imagenes.length;
    imagen.src = imagenes[indice];

}, 6000);