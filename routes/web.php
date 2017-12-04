<?php

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/ventas', 'VentasController@getProd')->name('home');

Route::get('/compus', 'CompusController@getCompus');
Route::get('/telefonos', 'TelefonosController@getTelefonos');

Route::get("/agregarProducto", function (){
  return view('/agregarProducto');
});
Route::post("/agregarProducto", "ProductsController@guardar");
Route::get("/borrarProducto/{id}", "ProductsController@borrar");
