<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use IDCrypt;

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
    $Proposal = Proposal::all();

    return view('depan.ProposalDaftar', ['Proposal' => $Proposal]);
  }

  public function InfoDaftarProposal($Id){
    $Id = IDCrypt::Decrypt($Id);
    $Proposal = Proposal::findOrFail($Id);

    return view('depan.ProposalInfo', ['Proposal' => $Proposal]);
  }
}
