<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ProductController extends Controller
{
    // Para obtener el listado de categorías y subcategorías de cada categoría:
    // http://buybeststock.com/webservice/?task=categorias    

    // Para obtener listado de productos de una SUBCATEGORIA especifica deben pasar el ID de la subcategoría (ver abajo reemplazando XXX por el id)

    // http://buybeststock.com/webservice/?task=productos&categoria_id=XXX

    public function index(){
        $url = "http://buybeststock.com/webservice/?task=categorias";
        $response = Http::get($url);
        $data = $response->json();
        return view('showProducts',compact('data'));
    }
}
