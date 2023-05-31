<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProveedoreController;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\ConsumiblesController;
use App\Http\Controllers\VentasController;
use App\Http\Controllers\PlatoController;
use App\Http\Controllers\VenderController;
use App\Http\Controllers\ReportesController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\RoleController;

use App\Proveedore;

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
    return view('home');
});
Route::get('/menu', [App\Http\Controllers\CartController::class, 'shop'])->name('shop');
//Route::get('/', [App\Http\Controllers\CartController::class, shop')->name('shop');
Route::get('/cart', [App\Http\Controllers\CartController::class, 'cart'])->name('cart.index');
Route::post('/add', [App\Http\Controllers\CartController::class, 'add'])->name('cart.store');
Route::post('/update', [App\Http\Controllers\CartController::class, 'update'])->name('cart.update');
Route::post('/remove', [App\Http\Controllers\CartController::class, 'remove'])->name('cart.remove');
Route::post('/clear', [App\Http\Controllers\CartController::class, 'clear'])->name('cart.clear');

Auth::routes();
Route::get('/nosotros', [HomeController::class,"nosotros"]);
Route::get('/reservas', [HomeController::class,"reservas"]);
Route::get('/shop_single/{id}', [HomeController::class,"shop_single"])->name('shop_single');
Route::get('/pqrs', [HomeController::class,"pqrs"]);
Route::get('/mision-vision', [HomeController::class,"mision_vision"]);
Route::get('/info', [HomeController::class,"info"]);


Route::post('contactUsPost',[ContactUsController::class,'contactUsPost'])->name('contactUs.contactUsPost');

//Route::get('/home', 'HomeController::class, index')->name('home');
//Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('profile/show', function () {
        return view('profile.show');
    });



Route::resource('admin/products', ProductController::class);
Route::resource('admin/proveedores', ProveedoreController::class);
Route::resource('admin/platos', PlatoController::class);
Route::resource('admin/clientes', ClientesController::class)->middleware('can:admin.clientes.index');
Route::resource('admin/consumibles', ConsumiblesController::class);
Route::get('admin/reportes', [ReportesController::class,"index"]);
Route::post('admin/reportes', [ReportesController::class,"generar"])->name('reportes.generar');
Route::resource('admin/ventas', VentasController::class);
Route::get("/ventas/ticket", [VentasController::class,"ticket"])->name("ventas.ticket");
Route::resource('/ventas', VentasController::class);
Route::get("admin/vender", [VenderController::class,"index"])->name("vender.index");
Route::post("/productoDeVenta", [VenderController::class,"agregarProductoVenta"])->name("agregarProductoVenta");
Route::delete("/productoDeVenta", [VenderController::class,"quitarProductoDeVenta"])->name("quitarProductoDeVenta");
Route::post("/terminarOCancelarVenta", [VenderController::class,"terminarOCancelarVenta"])->name("terminarOCancelarVenta");
Route::get("search/cliente", [VenderController::class,"clientes"])->name('search.clientes');
Route::resource('admin/users', UserController::class)->middleware('can:admin.users.index');
Route::resource('admin/roles', RoleController::class);#->middleware('can:admin.roles.index');
});