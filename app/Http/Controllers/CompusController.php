<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompusController extends Controller
{
  public function getCompus(){
    return view("compus");

  }
}
