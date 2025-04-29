
let elemento = document.querySelector(".iconito_hamburguesa");

//Agregar blur a los elementos exteriores al slide bar
let div_blur = document.getElementById("overlay_blur");

elemento.addEventListener("click", function () {
    let div = document.querySelector(".lista");
    div.classList.toggle("aparecer");


    div_blur.classList.add("agregar_blur");
})


let x = document.querySelector(".x_panel");

x.addEventListener("click", function () {

    let panel = document.querySelector(".lista");
    panel.classList.remove("aparecer");
    div_blur.classList.remove("agregar_blur");
})