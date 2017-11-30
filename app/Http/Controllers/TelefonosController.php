<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TelefonosController extends Controller
{
  public function getTelefonos(){
    return view("telefonos");

  }
}
