<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kota extends Model
{
  public function Kecamatan(){
   return $this->hasMany('App\Kecamatan');
  }
}
