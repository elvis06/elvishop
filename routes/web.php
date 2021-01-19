<?php
use Illuminate\Support\Facades\Gate;
use App\Product;
use App\Category;
use App\Image;
use App\User;

// para hacer las pruebas con las imagenes
Route::get('/prueba', function () {

    Gate::authorize('haveaccess','role.show');
    $user = User::find(1);
    return $user;

});

Route::get('/resultados', function () {
    $image = App\Image::orderBy('id','Desc')->get();
    return $image;
});

Route::get('/', function () {
    $productos = Product::all();
    $categorias = Category::all();
    $slider = Product::where('sliderprincipal','Si');
    if(!\Session::has('cart')) \Session::put('cart', array());
    $cart = \Session::get('cart');
    $total = 0;
    foreach ($cart as $item) {
        $total += $item->precio_actual * $item->cant;
    }
    return view('tienda.index', compact('productos','categorias','slider','cart','total'));
});

Route::resource('/role', 'RoleController')->names('role');
Route::resource('/user', 'UserController',['except'=>['create','store']])->names('user');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//Mis rutas
Route::get('/categoria/{slug}', 'API\CategoryController@categoria')->name('categoria');
Route::get('/{slug}', 'API\ProductController@producto')->name('producto');
Route::get('/sndsur/contactos', function () {
    if(!\Session::has('cart')) \Session::put('cart', array());
    $cart = \Session::get('cart');
    $total = 0;
    foreach ($cart as $item) {
        $total += $item->precio_actual * $item->cant;
    }
    return view('tienda.contactos', compact('cart','total'));
});
Route::get('/sndsur/sobre-nosotros', function () {
    if(!\Session::has('cart')) \Session::put('cart', array());
    $cart = \Session::get('cart');
    $total = 0;
    foreach ($cart as $item) {
        $total += $item->precio_actual * $item->cant;
    }
    return view('tienda.sobre-nosotros', compact('cart','total'));
});
Route::get('/sndsur/condiciones', function () {
    if(!\Session::has('cart')) \Session::put('cart', array());
    $cart = \Session::get('cart');
    $total = 0;
    foreach ($cart as $item) {
        $total += $item->precio_actual * $item->cant;
    }
    return view('tienda.condiciones', compact('cart','total'));
});
Route::get('/sndsur/trabaja-con-nosotros', function () {
    if(!\Session::has('cart')) \Session::put('cart', array());
    $cart = \Session::get('cart');
    $total = 0;
    foreach ($cart as $item) {
        $total += $item->precio_actual * $item->cant;
    }
    return view('tienda.trabaja-con-nosotros', compact('cart','total'));
});
Route::get('login/{driver}', 'Auth\LoginController@redirectToProvider');
Route::get('login/{driver}/callback', 'Auth\LoginController@handleProviderCallback');

Route::get('/admin', function () {
    return view('plantilla.admin');
})->name('admin');

Route::resource('admin/category', 'Admin\AdminCategoryController')->names('admin.category');
Route::resource('admin/product', 'Admin\AdminProductController')->names('admin.product');

Route::get('cancelar/{ruta}', function($ruta){
    return redirect()->route($ruta)->with('cancelar','Acción cancelada!');
})->name('cancelar');

//Buscar productos en base al slug
Route::bind('product', function($slug){
    return App\Product::where('slug', $slug)->first();
});
//Carrito
Route::get('cart/show', 'CartController@show')->name('cart-show');
Route::get('cart/add/{product}', 'CartController@add')->name('cart-add');
Route::get('cart/delete/{product}', 'CartController@delete')->name('cart-delete');
Route::get('cart/trash', 'CartController@trash')->name('cart-trash');
Route::get('cart/update/{product}/{cantidad}', 'CartController@update')->name('cart-update');       

//Buscar
Route::get('buscar', 'API\ProductController@buscar')->name('buscar'); 