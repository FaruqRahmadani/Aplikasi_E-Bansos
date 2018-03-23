<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Instansi extends Model
{
  public function Kecamatan(){
    return $this->belongsTo('App\Kecamatan');
  }

  public function Kelurahan(){
    return $this->belongsTo('App\Kelurahan');
  }
}
