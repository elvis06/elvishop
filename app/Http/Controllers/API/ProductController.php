<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category;
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
            if(!\Session::has('cart')) \Session::put('cart', array());
            $cart = \Session::get('cart');
            $total = 0;
            foreach ($cart as $item) {
                $total += $item->precio_actual * $item->cant;
            }
            return view('tienda.producto', compact('producto','productos','cart','total'));
        }else{
            return 'No existe el enlace';
        }
    }
    //Buscar Productos
    public function buscar(Request $request)
    {
        $buscar = $request->get('buscar');
        $cat = $request->get('cat');
        $categoria = Category::where('slug',$cat)->first();
        if($cat == '0'){
            $prod = Product::where('products.nombre', 'like', '%'.$buscar.'%')->paginate(10);
        }else{
            $prod = Product::where('products.category_id',$categoria->id)->where('products.nombre', 'like', '%'.$buscar.'%')->paginate(10);
        }
        if(!\Session::has('cart')) \Session::put('cart', array());
        $cart = \Session::get('cart');
        $total = 0;
        foreach ($cart as $item) {
            $total += $item->precio_actual * $item->cant;
        }
        return view('tienda.buscar', compact('categoria','prod','productos','cart','total','buscar'));
    }
}
