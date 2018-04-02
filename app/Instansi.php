<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Instansi extends Model
{
  use SoftDeletes;

  public function Kecamatan(){
    return $this->belongsTo('App\Kecamatan');
  }

  public function Kelurahan(){
    return $this->belongsTo('App\Kelurahan');
  }
}
