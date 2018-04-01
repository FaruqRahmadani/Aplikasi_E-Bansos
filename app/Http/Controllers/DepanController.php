<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Proposal;

class DepanController extends Controller
{
  public function Beranda(){
    $Proposal = Proposal::all();

    return view('depan.Beranda', ['Proposal' => $Proposal]);
  }

  public function DaftarPersyaratan(){
    return view('depan.PersyaratanDaftar');
  }

  public function Kontak(){
    return view('depan.Kontak');
  }

  public function DaftarProposal(){
    return view('depan.ProposalDaftar');
  }
}
