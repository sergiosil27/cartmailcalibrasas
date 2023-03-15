<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactUsController;


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
