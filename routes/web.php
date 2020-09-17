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
    return view('tienda.index', compact('productos','categorias','slider'));
});

Route::resource('/role', 'RoleController')->names('role');
Route::resource('/user', 'UserController',['except'=>['create','store']])->names('user');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//Mis rutas
Route::get('/{slug}', 'API\ProductController@producto')->name('producto');

Route::get('/admin', function () {
    return view('plantilla.admin');
})->name('admin');

Route::resource('admin/category', 'Admin\AdminCategoryController')->names('admin.category');
Route::resource('admin/product', 'Admin\AdminProductController')->names('admin.product');

Route::get('cancelar/{ruta}', function($ruta){
    return redirect()->route($ruta)->with('cancelar','Acción cancelada!');
})->name('cancelar');