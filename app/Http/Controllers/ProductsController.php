<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductsController extends Controller
{
  public function guardar(Request $r) {

    $reglas = [
      "product" => "required|string",
      "price" => "required|numeric|min:0",
    ];

    $mensajes = [
      "required" => "El campo :attribute es requerido",
      "min" => "El campo :attribute tiene un minimo de :min",
      "numeric" => "El campo :attribute debe ser un número",
      "string" => "El campo :attribute debe ser un texto",
    ];

    $this->validate($r, $reglas, $mensajes);

    $producto = new Product();
    $producto->product = $r->input("producto");
    $producto->price = $r->input("precio");

    $producto->save();

    Product::create($r->all());

    return redirect("/");
  }

  public function borrar($id) {
    $product = Product::find($id);

    $product->delete();

    return redirect("/");
  }

}
