<?php
Route::get('/', function () {  return view('welcome'); });
Auth::routes();

Route::get("/productos", 'ProductsController@listar');


Route::get("/misProductos", "ProductsController@misProductos");
Route::get("/misProductos/{prod}", "ProductsController@detalle");

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/ventas', 'VentasController@getProd')->name('home');
Route::get("/agregarProducto", 'ProductsController@getProd')->name('home');



Route::post("/agregarProducto", "ProductsController@guardar");

Route::get("/borrarProducto", "ProductsController@borrar" );

Route::get("/find", 'FindController@listar');

Route::get("/find/{id}", 'FindDetalle@detalle');

Route::get('/compus', 'CompusController@getCompus');
Route::get('/telefonos', 'TelefonosController@getTelefonos');
Route::get("/borrarProducto/{id}", "ProductsController@borrar");
