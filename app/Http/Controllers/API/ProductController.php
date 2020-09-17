<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;
use App\Image;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
    public function index()
    {
        return Product::all();
    }
    public function show($slug)
    {
        if (Product::where('slug',$slug)->first()){
            return 'Slug existe';
        }else{
            return 'Slug disponible';
        }
    }
    public function eliminarimagen($id)
    {
        //return "se va a eliminar el registro".$id;
        $image = Image::find($id);
        $archivo = substr($image->url,1);
        $eliminar = File::delete($archivo);
        $image->delete();
        return "eliminado id: ".$id." ".$eliminar;
    }
    public function producto($slug)
    {
        $productos = Product::all();
        $producto = Product::where('slug',$slug)->first();
        if ($producto){
            return view('tienda.producto', compact('producto','productos'));
        }else{
            return 'No existe el enlace';
        }
    }
}
