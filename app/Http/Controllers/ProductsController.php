<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\User;
use Auth;
use DB;
use App\Quotation;


class ProductsController extends Controller
{
  public function guardar(Request $r) {

    $reglas = [
      "producto" => "required|string",
      "precio" => "required|numeric|min:0",
      "category" => "required|string",
      "descripcion" => "required|string",
      "user_id" => "required",
    ];

    $mensajes = [
      "required" => "El campo :attribute es requerido",
      "min" => "El campo :attribute tiene un minimo de :min",
      "numeric" => "El campo :attribute debe ser un número",
      "string" => "El campo :attribute debe ser texto",
    ];

    $this->validate($r, $reglas, $mensajes);

    $producto = new Product();
    $producto->producto = $r->input("producto");
    $producto->precio = $r->input("precio");
    $producto->category = $r->input("category");
    $producto->descripcion = $r->input("descripcion");
    $producto->user_id = $r->input("user_id");

    Product::create($r->all());
    return redirect("/");
}

  public function borrar($id) {
    $product = Product::find($id);
    $product->delete();
    return redirect("/");
  }

  public function listar(){
    $productos = Product::all();
    return view("productos", compact("productos"));
  }

  public function detalle($id){
    $prodFinal = Product::find($id);
    $id_usuario = Auth::user()->id;
    return view("productoDetalle", compact("prodFinal", "id_usuario"));
  }

  public function misProductos(){
      $id_user = Auth::user()->id;
      $productos = DB::table('products')
                ->join('users', 'users.id', '=', 'products.user_id')
                ->select('products.*')->where('products.user_id', $id_user)
                ->get();
    return view("productos", compact("productos"));
  }

  public function getProd(){
    return view("agregarProducto");

  }

  }
