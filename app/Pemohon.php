<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pemohon extends Model
{
  use SoftDeletes;

  protected $dates = ['deleted_at'];

  public function Provinsi(){
    return $this->belongsTo('App\Provinsi');
  }

  public function Kota(){
    return $this->belongsTo('App\Kota');
  }

  public function Kelurahan(){
    return $this->belongsTo('App\Kelurahan');
  }
}
