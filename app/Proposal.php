<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proposal extends Model
{
  public function Instansi(){
    return $this->belongsTo('App\Instansi');
  }

  public function StatusProposal(){
    return $this->hasMany('App\StatusProposal');
  }
}
