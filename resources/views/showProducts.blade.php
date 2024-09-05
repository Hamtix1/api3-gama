<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="./css/font-awesome/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href={{ asset('css/style.css') }}>
    <title>Gamma</title>
</head>
<nav class="navbar">
    <div class="nav-container">
        <a href="https://www.gmarketingcreativo.com/" class="brand"><img src="./img/Logo-gamamarketing.png"
                alt=""></a>
        <button class="hamburger" id="hamburger">
            &#9776;
        </button>
        <ul class="nav-menu" id="nav-menu">
            <li class="nav-item">
                <a href="https://www.gmarketingcreativo.com/" class="nav-link">Inicio</a>
            </li>
            <li class="nav-item">
                <a href="https://www.gmarketingcreativo.com/conocenos/" class="nav-link">Conócenos</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">Catalogos <i class="fa fa-caret-down"></i></a>
                <ul class="dropdown">
                    <li><a href="https://www.gmarketingcreativo.com/api1-gama/" class="dropdown-link">Catalogo de
                            productos 1</a></li>
                    <li><a href="https://www.gmarketingcreativo.com/catalogo-de-productos-2/"
                            class="dropdown-link">Catalogo de productos 2</a></li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="https://www.gmarketingcreativo.com/blog/" class="nav-link">Blog</a>
            </li>
            <li class="nav-item">
                <a href="https://www.gmarketingcreativo.com/contacto/" class="nav-link">Contacto</a>
            </li>
        </ul>
    </div>
</nav>

<body>
    <div class="page_title">
        <h2>Catálogo de productos número 1</h2>
    </div>
    <div id="content" class="content">
        <div class="products_filter" id="products_filter">
            <p class="title_h3">Buscar</p>
            <input type="text" placeholder="Busca tu producto" class="input_text" id="searchInput">
            <p class="title_h3">Categorias</p>
            <select id="selector" name="simple" class="category_filter">
                <option selected value="" selected>Seleccione Categoría</option>
                @foreach ($data as $producto)
                    <option selected value="{{ $producto['name'] }}">{{ mb_convert_case($producto['name'], MB_CASE_TITLE, "UTF-8") }}</option>
                @endforeach                
            </select>
        </div>
        <div class="products_list_content" id="productListContent">
            <div class="products_list" id="products_list"></div>
        </div>
    </div>
    <!-- Ventana emergente que muestra la información de cada producto -->
    <div class="popup" id="popup">
        <div class="popup-content" id="popupContent">
            <div class="top-row">
                <button id="closePopupBtn">x</button>
            </div>
            <div class="popup-principal-content" id="popup-principal-content">

            </div>
        </div>
    </div>
    <!-- <script src="temp.js"></script> -->
    <script src="js/menu.js"></script>
    <script src="js/colores.js"></script>
    <script src="js/main.js"></script>
</body>

</html>
