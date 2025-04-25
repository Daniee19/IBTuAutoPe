
let elemento = document.querySelector(".iconito_hamburguesa");


elemento.addEventListener("click", function () {
    let div = document.querySelector(".lista");
    div.classList.toggle("aparecer");
})


let x = document.querySelector(".x_panel");

x.addEventListener("click", function () {

    let panel = document.querySelector(".lista");
    panel.classList.remove("aparecer");
})