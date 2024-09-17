let list = document.querySelectorAll('.gama_categoria')

list.forEach(categoria => {
    categoria.classList.forEach(clase => {
        if (clase == "gama_arrow") {

            let height = 0
            let subElement = categoria.nextElementSibling
            if (subElement.clientHeight == "0") {
                height = subElement.scrollHeight
            }

            subElement.style.height = `${height}px`
        }
    })
    categoria.addEventListener('click', e => {
        e.preventDefault()
        categoria.classList.toggle('gama_arrow')
        let height = 0
        let subElement = categoria.nextElementSibling
        if (subElement.clientHeight == "0") {
            height = subElement.scrollHeight
        }

        subElement.style.height = `${height}px`
    })
});

//Dar estilos a la descripción que viene desde la API
var productDescription = document.querySelector(".product_description");

if (productDescription) {
    productDescription.style.fontFamily = "Montserrat";

    // Cambiar el tamaño de fuente de todos los span dentro de product_description
    var spans = productDescription.querySelectorAll("span");
    spans.forEach(function (span) {
        span.style.fontSize = "16px";  // Cambia el tamaño de fuente
        span.style.fontFamily = "Montserrat";  // Cambia la fuente
        span.style.fontWeight = 400;
    });

    // Ajustar márgenes o cualquier otro estilo que necesites
    var divs = productDescription.querySelectorAll("div");
    divs.forEach(function (div) {
        div.style.marginBottom = "10px";
    });
}