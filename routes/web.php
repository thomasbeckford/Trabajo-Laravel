<?php
Route::get('/', function () {  return view('welcome'); });
Auth::routes();

Route::get("/productos", 'ProductsController@listar')->name('home');
Route::get("/misProductos", "ProductsController@misProductos")->name('home');
Route::get("/misProductos/{prod}", "ProductsController@detalle")->name('home');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/ventas', 'VentasController@getProd')->name('home');

Route::get("/modificar/{id}", "ProductsController@modificar")->name('home');
Route::post("/modificar/{id}", "ProductsController@modificarProd")->name('home');

Route::get("/agregarProducto", 'ProductsController@getProd')->name('home');
Route::post("/agregarProducto", "ProductsController@guardar")->name('home');

Route::get("/borrarProducto", "ProductsController@borrar" )->name('home');
Route::get("/borrarProducto/{id}", "ProductsController@borrar")->name('home');
