<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provinsi extends Model
{
  public function Kota(){
   return $this->hasMany('App\Kota');
  }
}
