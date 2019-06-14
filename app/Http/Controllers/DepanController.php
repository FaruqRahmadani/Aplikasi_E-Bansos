<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use IDCrypt;
use Mail;

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

  public function DaftarProposal(){
    $Proposal = Proposal::all();

    return view('depan.ProposalDaftar', ['Proposal' => $Proposal]);
  }

  public function InfoDaftarProposal($Id){
    $Id = IDCrypt::Decrypt($Id);
    $Proposal = Proposal::findOrFail($Id);

    return view('depan.ProposalInfo', ['Proposal' => $Proposal]);
  }

  public function Kontak(){
    return view('depan.Kontak');
  }

  public function submitKontak(Request $request){
    Mail::send('mail.Kontak', ['request' => $request], function($mail) {
      $mail->from('ebansospublic@gmail.com', 'Aplikasi E-Bansos [Kontak]');
      $mail->to('ahmadsyauqi@merahputih.id', 'Faruq Rahmadani');
      $mail->subject('Pesan dari E-Bansos');
    });

    return redirect(route('Kontak'))->with('success', 'Email Berhasil Dikirimkan');
  }
}
