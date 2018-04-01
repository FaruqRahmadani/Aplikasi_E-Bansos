<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DepanController extends Controller
{
  public function Beranda(){
    return view('depan.Beranda');
  }
}
