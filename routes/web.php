<?php

use App\Http\Controllers\comprasController;
use App\Http\Controllers\deseosController;
use App\Http\Controllers\productoController;
use App\Http\Controllers\usuarioController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Auth::routes();
Route::get('/',[productoController::class,'index1']);
Route::get('/Admin', function(){
    return view('admin.index');
});
/*Route::get('almacen', function () {
    return view('almacen');
});*/


Route::resource('provedor', App\Http\Controllers\ProvedorController::class); 
Route::resource('marca', App\Http\Controllers\MarcaController::class);
Route::resource('producto', App\Http\Controllers\ProductoController::class);
Route::resource('usuario', App\Http\Controllers\UsuarioController::class);

Route::get('app2', function () {
    return view('layouts.app2');
});
Route::get('Admin', function () {
    return view('admin.home');
});
Route::get('/home',[productoController::class,'inde']);
Route::get('/Ofertas',[productoController::class,'oferta']);
Route::get('/Modas',[productoController::class,'moda']);
Route::get('/Descuentos',[productoController::class,'descuento']);
Route::get('/Compras',[comprasController::class,'showCompras']);
Route::get('/Lista-de-deseos',[deseosController::class,'shoDeseos']);
Route::get('/AcDatos',[App\Http\Controllers\usuarioController::class,'show']);
Route::get('/AcDatos/{id}',[App\Http\Controllers\usuarioController::class,'edit']);
Route::get('/perfil',[App\Http\Controllers\usuarioController::class,'showPerfil']);
Route::get('/AcCredito',[App\Http\Controllers\creditoController::class,'redic']);
Route::get('/Compras-Producto/{id}',[App\Http\Controllers\productoController::class,'showProducto']);
Route::put('/update/{id}',[App\Http\Controllers\usuarioController::class,'update']);
Route::put('/updateCredito/{id}',[App\Http\Controllers\creditoController::class,'update']);

Route::get('/AcDirecciones',[App\Http\Controllers\direccionesController::class,'show']);
Route::post('/store',[App\Http\Controllers\direccionesController::class,'store']);
Route::delete('/eliminar/{id}',[App\Http\Controllers\direccionesController::class,'delete']);
Route::post('/create',[App\Http\Controllers\tarjetaController::class,'store']);
Route::post('/createCredito',[App\Http\Controllers\creditoController::class,'store']);
Route::delete('/eliminar_producto/{id}',[App\Http\Controllers\deseosController::class,'delete']);
Route::put('/Comprar',[App\Http\Controllers\comprasController::class,'store']);
Route::get('/Agregar-carrito/{id}',[App\Http\Controllers\deseosController::class,'store']);

Route::get('/UsuariosWeb',[App\Http\Controllers\usuarioController::class,'Usuarios_web']);
Route::get('/UsuariosAlmacen',[App\Http\Controllers\usuarioController::class,'Usuarios_almacen']);

Route::post('/createAlmacen',[App\Http\Controllers\usuarioController::class,'create']);
Route::get('/editarAlmacen/{id}',[App\Http\Controllers\usuarioController::class,'showAlmacen']);;
