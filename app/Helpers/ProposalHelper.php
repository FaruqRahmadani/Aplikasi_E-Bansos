<?php
namespace App\Helpers;

use Request;

class ProposalHelper
{
  public static function Status($Proposal){
    if ($Proposal->kelengkapan != 'Lengkap') {
      $return = '<div class="btn-sm bg-warning text-center">Berkas Belum Lengkap</div>';
    }else {
      $LastStatus = $Proposal->StatusProposal
                             ->last()
                             ->status;
      if ($LastStatus == '0') {
        $return = '<div class="btn-sm bg-info" align="center">Sedang Diproses</div>';
      }
      if ($LastStatus == '1') {
        $return = '<div class="btn-sm bg-success" align="center">Diterima</div>';
      }
      if ($LastStatus == '2') {
        $return = '<div class="btn-sm bg-primary" align="center">Ditolak</div>';
      }
    }
    return $return;
  }
}
