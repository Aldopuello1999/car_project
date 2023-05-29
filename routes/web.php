<?php

use App\Http\Controllers\CarritoActualController;
use App\Http\Controllers\CarritoController;
use App\Http\Controllers\CategoriasController;
use App\Http\Controllers\ProductosController;
use App\Http\Src\Cart\Controllers\CartController;
use App\Http\Src\Checkout\Controllers\CheckoutController;
use Illuminate\Support\Facades\Route;
use App\Http\Src\Usuarios\Controllers\UsuariosController;
use App\Http\Src\Parametros\Controllers\ParametrosController;
use App\Http\Src\Entradas\Controllers\EntradasController;
use App\Http\Src\Entidades\Controllers\EntidadesController;
use App\Http\Src\Salidas\Controllers\SalidasController;
use App\Http\Src\TablaRetencion\Controllers\TablaRetencionController;
use App\Http\Src\Correspondencia\Controllers\CorrespondenciaController;
use App\Http\Src\Coupons\Controllers\CouponsController;
use App\Http\Src\Page\Controllers\PageController;
use App\Http\Src\Shop\Controllers\ShopController;
use App\Http\Src\Transferencia\Controllers\TransferenciasController;


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

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');



Route::get('/usuarios', [UsuariosController::class, 'index'])->name('usuarios.index');
Route::post('/usuarios/store', [UsuariosController::class, 'store'])->name('usuarios.store');
Route::post('/usuarios/update', [UsuariosController::class, 'update'])->name('usuarios.update');
Route::post('/usuarios/delete', [UsuariosController::class, 'destroy'])->name('usuarios.delete');
Route::post('/usuarios/state', [UsuariosController::class, 'state'])->name('usuarios.state');

Route::get('/parametros', [ParametrosController::class, 'index'])->name('parametros.index');
Route::get('/parametros/values', [ParametrosController::class, 'indexValues'])->name('parametros.indexValues');
Route::post('/parametros/values/create', [ParametrosController::class, 'createValue'])->name('parametros.createValue');
Route::post('/parametros/delete', [ParametrosController::class, 'destroy'])->name('parametros.destroy');
Route::post('/parametros/state', [ParametrosController::class, 'state'])->name('parametros.state');

Route::get('/entrada/index', [EntradasController::class, 'index'])->name('entradas.index');
Route::get('/entrada/create', [EntradasController::class, 'create'])->name('entradas.create');
Route::get('/entrada/detail', [EntradasController::class, 'show'])->name('entradas.detail');
Route::get('/entrada/edit', [EntradasController::class, 'edit'])->name('entradas.edit');

Route::get('/pendientes/index', [EntradasController::class, 'indexPendientes'])->name('pendientes.index');

Route::get('/salida/index', [SalidasController::class, 'index'])->name('salidas.index');
Route::post('/salida/create', [SalidasController::class, 'create'])->name('salidas.create');
Route::get('/salida/detail', [SalidasController::class, 'show'])->name('salidas.detail');
Route::get('/salida/edit', [SalidasController::class, 'edit'])->name('salidas.edit');

Route::get('/entidad/index', [EntidadesController::class, 'index'])->name('entidades.index');
Route::post('/entidad/create', [EntidadesController::class, 'store'])->name('entidades.create');
Route::get('/entidad/detail', [EntidadesController::class, 'show'])->name('entidades.detail');
Route::post('/entidad/edit', [EntidadesController::class, 'update'])->name('entidades.edit');
Route::post('/entidad/delete', [EntidadesController::class, 'destroy'])->name('entidades.destroy');
Route::post('/entidad/state', [EntidadesController::class, 'state'])->name('entidades.state');

Route::get('/tablaretencion/index', [TablaRetencionController::class, 'index'])->name('tablaretencion.index');
Route::get('/tablaretencion/indexSeries', [TablaRetencionController::class, 'indexSeries'])->name('tablaretencion.indexSeries');
Route::get('/tablaretencion/indexContent', [TablaRetencionController::class, 'indexContent'])->name('tablaretencion.indexContent');


Route::get('/transferencia/index', [TransferenciasController::class, 'index'])->name('transfer.index');


Route::get('/correo/index', [CorrespondenciaController::class, 'index'])->name('correo.index');
Route::prefix('correo')->group(function () {
    Route::get('/', [CorrespondenciaController::class, 'index'])->name('correo');
    Route::get('/historial', [CorrespondenciaController::class, 'historial'])->name('correo.historial');
    Route::get('/subir', [CorrespondenciaController::class, 'upguia'])->name('correo.subir');
    Route::get('/devolucion', [CorrespondenciaController::class, 'devoluciones'])->name('correo.devolucion');
});



/// ----- Pages------------------
Route::get('/page', [PageController::class, 'index'])->name('page.index');


Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::post('/cart/store', [CartController::class, 'store'])->name('cart.store');
Route::post('/cart/update', [CartController::class, 'update'])->name('cart.update');
Route::post('/cart/show', [CartController::class, 'show'])->name('cart.show');
Route::post('/cart/delete', [CartController::class, 'destroy'])->name('cart.delete');

/// ----- Coupon------------------
Route::post('/coupon/store', [CouponsController::class, 'store'])->name('coupon.store');
Route::post('/coupon/delete', [CouponsController::class, 'destroy'])->name('coupon.destroy');

/// ----- Checkout------------------
Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout.index');
Route::post('/checkout/store', [CheckoutController::class, 'store'])->name('checkout.store');

Route::get('/shop', [ShopController::class, 'index'])->name('shop.index');
Route::get('/shop/show', [ShopController::class, 'show'])->name('shop.show');


// / ----- Admin------------------
Route::prefix('admin')->group(function () {
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/', 'AdminController@index')->name('admin.dashboard');
});

//	Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
Route::get('upgrade', function () {
    return view('pages.upgrade');
})->name('upgrade');
Route::get('map', function () {
    return view('pages.maps');
})->name('map');
Route::get('icons', function () {
    return view('pages.icons');
})->name('icons');
Route::get('table-list', function () {
    return view('pages.tables');
})->name('table');
Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);



Route::resource('categorias', CategoriasController::class);
Route::resource('productos', ProductosController::class);
Route::resource('carrito', CarritoController::class);

Route::get('/carrito/actual', [CarritoActualController::class, 'getActualCarrito'])->name('actualCar.get');
Route::post('/carrito/addProduct', [CarritoActualController::class, 'addNewProduct'])->name('actualCar.addproduct');
Route::post('/carrito/delete', [CarritoActualController::class, 'deleteProduct'])->name('actualCar.delete');
Route::post('/carrito/update/cant', [CarritoActualController::class, 'updateItem'])->name('actualCar.updateCant');
