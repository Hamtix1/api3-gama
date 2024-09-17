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

    public function showCategoria($id){    
        //Obtener las categorias
        $url = "http://buybeststock.com/webservice/?task=categorias";
        $response = Http::get($url);
        $data = $response->json();

        //Agregar bandera en la categoria de los datos para saber en qué categoría se encuentra actualmente
        for($i = 0; $i<count($data); $i++){ 
            for ($j=0;$j<count($data[$i]['subcategorias']);$j++){
                if($id == $data[$i]['subcategorias'][$j]['id']){
                    $data[$i]['active']=true;
                    break;
                }else{
                    $data[$i]['active']=false;
                }
            }
        }
        
        //
        $url = "http://buybeststock.com/webservice/?task=productos&categoria_id=".$id;
        $response = Http::get($url);
        $products = $response->json();
        return view('showCategory',compact('data','products','id'));
    }

    public function showProducto($id,$idProducto){ 
        //Obtener las categorias
        $url = "http://buybeststock.com/webservice/?task=categorias";
        $response = Http::get($url);
        $data = $response->json();        

        //Agregar bandera en la categoria de los datos para saber en qué categoría se encuentra actualmente
        for($i = 0; $i<count($data); $i++){ 
            for ($j=0;$j<count($data[$i]['subcategorias']);$j++){
                if($id == $data[$i]['subcategorias'][$j]['id']){
                    $data[$i]['active']=true;
                    break;
                }else{
                    $data[$i]['active']=false;
                }
            }
        }

        
        //Obtener subcategoria del producto
        $url = "http://buybeststock.com/webservice/?task=productos&categoria_id=".$id;
        $response = Http::get($url);
        $products = $response->json();

        $product = array_filter($products, function($product) use ($idProducto) {
            return $product['id'] == $idProducto;
        });        

        $product = reset($product);        
        return view('showProduct',compact('data','product','id'));
    }
}
