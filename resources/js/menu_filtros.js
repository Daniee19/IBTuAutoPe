let div = document.querySelector(".icono_open_filtros");
let elemento_izq = document.querySelector(".catalogo_filtro_izq");
let icono_x = document.querySelector(".icono_x");
div.addEventListener("click", function (event) {
    console.log("buenas");
    elemento_izq.classList.toggle("aparecer_contenedor_filtros");
})

icono_x.addEventListener("click", function () {
    elemento_izq.classList.remove("aparecer_contenedor_filtros");
})
//lugar donde se trae la información
let informacion_obtenida_tipo_v = document.querySelector(".tipo_vehiculo_titulo").textContent;
// console.log(informacion_obtenida_tipo_v);
//lugar donde se pondrá la información
let contenido_tipo_vehiculo = document.querySelector(".catalogo_info_tipo_vehiculo");
contenido_tipo_vehiculo.textContent = informacion_obtenida_tipo_v;
