
const items_categoria = document.querySelectorAll(".item_categoria");
const select_escoger_marca = document.querySelector(".escoger_marca");
const select_escoger_modelo = document.querySelector(".escoger_modelo");
//Crear los elementos en el select desde js para hacer que sea dinámico dependiendo de lo que quiera ver el usuario
//MARCAS
const marcas_auto = ["Todas las marcas", "Toyota", "Mercedes", "Honda", "Suzuki", "Kia", "Chevrolet"];
const marcas_moto = ["Todas las marcas", "Yamaha", "Honda", "Kawasaki", "Suzuki", "Ducati", "Harley - Davidson"];
const marcas_camion = ["Todas las marcas", "Volvo Trucks", "Freightliner", "Scania", "MAN", "Kenworth"];

//MODELOS AUTOS
const modeloAutos = {
    Toyota: ["Todos los modelos", "Corolla", "Camry", "Yaris", "Hilux", "RAV4", "Land Cruiser", "Prius", "Tacoma", "Fortuner", "4Runner"],
    Mercedes: ["Todos los modelos", "A-Class", "C-Class", "E-Class", "S-Class", "CLA", "CLS", "AMG GT", "EQE", "EQA", "EQC"],
    Honda: ["Todos los modelos", "Civic", "Accord", "Fit", "City", "Insight", "Integra", "Legend", "Ballade", "Grace", "CR-Z"],
    Suzuki: ["Todos los modelos", "Swift", "Baleno", "Dzire", "Celerio", "Alto", "SX4", "Kizashi", "Liana", "Forenza", "Aerio"],
    Kia: ["Todos los modelos", "Rio", "Cerato", "Optima", "Stinger", "Forte", "K5", "Cadenza", "Quoris", "K3", "K900"],
    Chevrolet: ["Todos los modelos", "Spark", "Aveo", "Onix", "Sonic", "Cruze", "Malibu", "Cobalt", "Impala", "Caprice", "Bolt EV"]
}

//MODELOS MOTOS
const modeloMotos = {
    Yamaha: ["Todos los modelos", "MT-07", "MT-09", "R1", "R6", "R3", "XSR700", "XSR900", "Tenere 700", "Tracer 9", "Bolt"],
    Honda: ["Todos los modelos", "CB500F", "CBR500R", "CBR650R", "CB650R", "Africa Twin", "Rebel 500", "Rebel 1100", "NC750X", "CB1000R", "CBR1000RR"],
    Kawasaki: ["Todos los modelos", "Ninja 400", "Ninja 650", "Ninja ZX-6R", "Ninja ZX-10R", "Z400", "Z650", "Z900", "Versys 650", "Vulcan S", "KLX230"],
    Suzuki: ["Todos los modelos", "GSX-R600", "GSX-R750", "GSX-R1000", "SV650", "V-Strom 650", "V-Strom 1050", "Hayabusa", "Gixxer SF 250", "Katana", "Intruder M1800R"],
    Ducati: ["Todos los modelos", "Panigale V2", "Panigale V4", "Monster", "Diavel", "Multistrada V4", "Scrambler Icon", "Streetfighter V4", "DesertX", "SuperSport 950", "Hypermotard 950"],
    'Harley - davidson': ["Todos los modelos", "Iron 883", "Forty-Eight", "Street Bob", "Fat Bob", "Fat Boy", "Heritage Classic", "Road King", "Low Rider S", "Sportster S", "Pan America 1250"]
}

//MODELOS CAMIONES
const modeloCamiones = {
    'Volvo Trucks': ["Todos los modelos", "FH", "FM", "FMX", "VNL", "VNR", "VNX", "VHD", "FE", "FL", "VAH"],
    Freightliner: ["Todos los modelos", "Cascadia", "Columbia", "Coronado", "M2 106", "M2 112", "122SD", "108SD", "114SD", "FLD120", "Classic XL"],
    Scania: ["Todos los modelos", "R-Series", "S-Series", "G-Series", "P-Series", "L-Series", "XT", "Streamline", "T-Series", "4-Series", "3-Series"],
    Man: ["Todos los modelos", "TGX", "TGS", "TGM", "TGL", "F2000", "L2000", "TGA", "CLA", "SLT", "TGX EfficientLine"],
    Kenworth: ["Todos los modelos", "T680", "T880", "W990", "W900", "T800", "C500", "T370", "T440", "T600", "K100"]
}
//Hago esto para evitar llamadas innecesarias cuando esté en otra página donde no se encuentren esos archivos
if (items_categoria && select_escoger_marca && select_escoger_modelo) {
    //Por defecto la marca de carro debe de estar seleccionado
    select_marca(marcas_auto);
    document.querySelector(".item_categoria.carro").classList.add("seleccionado_filtro");
    let valor_agilizar_categoria = "carro";
    select_modelo("", valor_agilizar_categoria);
    //(1)
    //Función para cambiar los valores del select cuando se seleccione una categoría
    function select_marca(array) {
        select_escoger_marca.innerHTML = "";
        let modelo = document.querySelector(".escoger_modelo");
        //Se crea  la etiqueta option y se asigna los valores del array ingresado
        array.forEach(m => {

            //Cuando se cambie de categoria se desactive automaticamente el select de modelo
            modelo.disabled = true;
            let opcion = document.createElement("option");
            if (m !== "Todas las marcas") {
                opcion.value = m;
            } else {
                opcion.value = "";
            }

            opcion.textContent = m;
            opcion.classList.add("item_marca");

            select_escoger_marca.appendChild(opcion);

        }
        );
    }

    //(2)
    //Función para habilitar y deshabilitar el select 'modelo', si en todo caso se selecciona una marca
    function select_modelo(nombreMarca, filtroCategoria) {
        console.log("Nombre de marca: ", nombreMarca);
        console.log(filtroCategoria)
        // 
        let modelo = document.querySelector(".escoger_modelo");
        //Si en caso selecciona un option que sea diferente que el valor por defecto 'todas las marcas'
        if (nombreMarca !== "") {
            modelo.disabled = false;
            select_escoger_modelo.innerHTML = "";
            let modelos_de_marca_especifica = [];

            if (filtroCategoria === "carro") {
                modelos_de_marca_especifica = modeloAutos[nombreMarca];
            } else if (filtroCategoria === "moto") {
                modelos_de_marca_especifica = modeloMotos[nombreMarca];
            } else if (filtroCategoria === "camion") {
                modelos_de_marca_especifica = modeloCamiones[nombreMarca];
            }

            //Crear un elemento option para el select modelo y cargar los elementos del array
            modelos_de_marca_especifica.forEach(modelo => {
                let opcion = document.createElement("option");
                if (modelo !== "Todos los modelos") {
                    opcion.value = modelo;
                } else {
                    opcion.value = "";
                }

                opcion.textContent = modelo;
                opcion.classList.add("item_modelo");
                select_escoger_modelo.appendChild(opcion);
            })

        } else if (nombreMarca === "") {
            // select_escoger_modelo.textContent = "Todos los modelos";
            select_escoger_modelo.innerHTML = "";
            let optionDefaultModeloAuto = document.createElement("option");
            optionDefaultModeloAuto.textContent = "Todos los modelos";
            select_escoger_modelo.appendChild(optionDefaultModeloAuto);
            modelo.disabled = true;
        }
    }

    //Lógica para hacer clic en el div y que se cambie el contenido de los select
    items_categoria.forEach(
        //En primer lugar, damos el permiso para permitir hacer click en los divs 
        t => t.addEventListener("click", function (event) {
            select_modelo("Todas las marcas", valor_agilizar_categoria);
            //Quitar la clase de todos los seleccionados
            items_categoria.forEach(i => i.classList.remove("seleccionado_filtro"));

            //Añadir clase al seleccionado (el div que se hizo click)
            t.classList.add("seleccionado_filtro");
            if (event.currentTarget.dataset.filtro === "carro") {
                select_marca(marcas_auto);
                valor_agilizar_categoria = "carro";
            } else if (event.currentTarget.dataset.filtro === "moto") {
                select_marca(marcas_moto);
                valor_agilizar_categoria = "moto";
            } else if (event.currentTarget.dataset.filtro === "camion") {
                select_marca(marcas_camion);
                valor_agilizar_categoria = "camion";
            }
        })
    );

    //Al seleccionar el option -> select_modelo(__ , __) -> cambiar los modelos en base a la marca seleccionada
    select_escoger_marca.addEventListener("click", function (event) {
        //Si hago clic en el option Toyota
        select_modelo(event.target.value, valor_agilizar_categoria);

    });
}

