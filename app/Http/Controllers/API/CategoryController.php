<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category;
use App\Product;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*$cat = new Category();
        $cat->nombre = 'Mujer';
        $cat->slug = 'mujer';
        $cat->descripcion = 'Ropa de Mujer';
        $cat->save();
        return $cat;*/
        return Category::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        if (Category::where('slug',$slug)->first()){
            return 'Slug existe';
        }else{
            return 'Slug disponible';
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function categoria($slug)
    {
        $productos = Product::all();
        $categoria = Category::where('slug',$slug)->first();
        if ($categoria){
            return view('tienda.categoria', compact('categoria','productos'));
        }else{
            return 'No existe el enlace';
        }
    }
}
