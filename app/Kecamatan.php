<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kecamatan extends Model
{
  public function Kelurahan(){
    return $this->hasMany('App\Kelurahan');
  }

  public function Kota(){
    return $this->belongsTo('App\Kota');
  }
}
