@extends('layouts.main-layout')

@section('content')
    <div id="content" class="content">
        <div class="products_filter" id="products_filter">
            <p class="title_h3">Buscar</p>
            <input type="text" placeholder="Busca tu producto" class="input_text" id="searchInput">
            <p class="title_h3">Categorias</p>
            <div class="gama_categorias_list">
                @foreach ($data as $categoria)
                    <ul class="gama_lista_1">
                        <li class="gama_categoria @if($categoria['active']) gama_arrow @endif">
                            <a href="#"
                                class="gama_text_categoria">{{ mb_convert_case($categoria['name'], MB_CASE_TITLE, 'UTF-8') }}
                            </a>
                            <i class="fa fa-caret-right gama_icon_arrow" aria-hidden="true"></i>
                        </li>
                        <ul class="gama_lista_2">
                            @foreach ($categoria['subcategorias'] as $subCategoria)
                                <li class="gama_sub_categoria">
                                    <a
                                        href="/categoria/{{$subCategoria['id']}}">{{ mb_convert_case($subCategoria['name'], MB_CASE_TITLE, 'UTF-8') }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </ul>
                @endforeach
            </div>
        </div>
        <div class="products_list_content" id="productListContent">
            <div class="products_list" id="products_list">
                @foreach($products as $product)                    
                    <a class="product_card" href={{ route('producto', ['id'=>$id,'idProducto'=>$product['id']]) }}>
                            <img class="product_img" src={{$product['basic_picture']}} alt={{$product['name']}}>
                        <h3>{{$product['name']}}</h3>
                    </a>
                @endforeach
            </div>
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
@endsection
