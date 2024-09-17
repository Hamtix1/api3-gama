<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href={{asset('./css/font-awesome/css/font-awesome.min.css')}}>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href={{ asset('css/style.css') }}>
    <link rel="stylesheet" href={{ asset('css/categorias.css') }}>
    <link rel="stylesheet" href={{ asset('css/product_view.css') }}>
    <title>Gamma</title>
</head>


<body>
    <nav class="navbar">
        <div class="nav-container">
            <a href="https://www.gmarketingcreativo.com/" class="brand"><img src={{ asset('./img/Logo-gamamarketing.png') }}
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
    <div class="page_title">
        <h2>Catálogo de productos número 3</h2>
    </div>
    @yield('content')
    <script src={{asset('js/categorias.js')}}></script>
    <script src={{ asset('js/menu.js') }}></script>
    {{-- <script src={{ asset('js/main.js') }}></script> --}}
</body>

</html>
