<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\RolController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\DashController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserPController;
use App\Http\Controllers\VentaController;
use App\Http\Controllers\CompraController;
use App\Http\Controllers\EditarPController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\BusquedaController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\JsonCompraController;
use App\Http\Controllers\CambiarPasswPController;
use App\Http\Controllers\ejemploController;
use App\Http\Controllers\DireccionController;
use App\Http\Controllers\ReporteController;
use App\Http\Controllers\WelcomeController;
use App\Models\Producto;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/',[WelcomeController::class,'index']);
//Route::get('/', function () {return view('welcome',);});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('panel');
//Route::get('/dash', [App\Http\Controllers\DashController::class, 'index'])->name('dash_adm');

Route::get('/dash', [App\Http\Controllers\DashController::class, 'index']);
Route::get('/editar_perfil', [App\Http\Controllers\EditarPController::class, 'index'])->name('editar_perfil');


Auth::routes();



Route::group(['middleware'=> ['auth']],function () {
    Route::resource('roles',RolController::class);
    Route::resource('usuarios',UsuarioController::class);
   

});



Route::get('/busqueda', BusquedaController::class)->name('busqueda');



Route::get('/compras', CompraController::class)->name('compras');
Route::get('/ventas', VentaController::class)->name('ventas');
Route::get('/jc', [JsonCompraController::class,'compras'])->name('json.compras');
Route::get('/jv', [JsonCompraController::class,'ventas'])->name('json.ventas');
Route::get('/jv2', [JsonCompraController::class,'ventas2'])->name('json.ventas2');
Route::get('/ejemplo',ejemploController::class)->name('ejemplo');


Route::get('/jsonProductos',[ App\Http\Controllers\BaseDeDatosController::class,'jsonProductos'])->name('json_compras');

//Route::resource('publicar', App\Http\Controllers\PublicarProductoController::class);

Route::get('/shop', [CartController::class, 'shop'])->name('shop');
Route::get('/cart', [CartController::class, 'cart'])->name('cart.index');
Route::post('/add', [CartController::class, 'add'])->name('cart.store');
Route::post('/update', [CartController::class, 'update'])->name('cart.update');
Route::post('/remove', [CartController::class, 'remove'])->name('cart.remove');
Route::post('/clear', [CartController::class, 'clear'])->name('cart.clear');
Route::get('/guard', [CartController::class, 'guard'])->name('cart.guard');

/*RUTAS PUBLICAR y MIS PUBLICACIONES*/
Route::resource('publicar', App\Http\Controllers\PublicarProductoController::class);

/*RUTAS EDITAR INFORMACION*/
Route::resource('editarinfo', App\Http\Controllers\EditarInfoController::class);
Route::post('editardatos/{id}', [App\Http\Controllers\EditarInfoController::class, 'editardatos'])->name('editardatos');
Route::resource('editarpasswd', App\Http\Controllers\CambiarPasswPController::class);
Route::resource('editardireccion', App\Http\Controllers\DireccionController::class);

/*RUTAS APIS*/
Route::get('joke', [ApiController::class, 'ApiJoke'])->name('apijoke'); 
Route::get('pixabay', [ApiController::class, 'ApiPixabay'])->name('pixabay.search'); 








Route::get('/mostrar-datos',  [ReporteController::class, 'showData'])->name('mostrar-datos');
Route::post('/filtrar-datos', [ReporteController::class, 'filterData'])->name('filtrar-datos');
Route::get('/generar-pdf', [ReporteController::class, 'generatePDF2'])->name('generar-pdf');
