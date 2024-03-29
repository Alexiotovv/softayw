<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductosController;
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

Route::get('/clientes', function () {
    return view('home_panel');
});

Route::get('/login', function () {
    return view('login');
});

//Productos
Route::get('productos/index',[ProductosController::class,'index'])->name('productos_index');
