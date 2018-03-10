<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
  public function Beranda(){
    return view('admin.beranda');
  }
}
