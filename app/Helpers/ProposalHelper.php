<?php
namespace App\Helpers;

use Request;

class ProposalHelper
{
  public static function Status($Data){
    if ($Data->status == '0') {
      $return = '<span class="indicator label-info"></span>Sedang Diproses';
    }
    if ($Data->status == '1') {
      $return = '<span class="indicator label-success"></span>Diterima';
    }
    if ($Data->status == '2') {
      $return = '<span class="indicator label-primary"></span>Ditolak';
    }

    return $return;
  }

  public static function LastStatus($Proposal){
    if ($Proposal->kelengkapan != 'Lengkap') {
      $return = '<span class="indicator label-warning"></span>Berkas Belum Lengkap';
    }else {
      $LastStatus = $Proposal->StatusProposal
                             ->last()
                             ->status;
      if ($LastStatus == '0') {
        $return = '<span class="indicator label-info"></span>Sedang Diproses';
      }
      if ($LastStatus == '1') {
        $return = '<span class="indicator label-success"></span>Diterima';
      }
      if ($LastStatus == '2') {
        $return = '<span class="indicator label-primary"></span>Ditolak';
      }
    }
    return $return;
  }
}
