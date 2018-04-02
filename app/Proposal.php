<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Proposal extends Model
{
  use SoftDeletes;

  public function Pemohon(){
    return $this->belongsTo('App\Pemohon');
  }

  public function Instansi(){
    return $this->belongsTo('App\Instansi');
  }

  public function StatusProposal(){
    return $this->hasMany('App\StatusProposal');
  }
}
