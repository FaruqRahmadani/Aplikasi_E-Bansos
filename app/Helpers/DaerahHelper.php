<?php
namespace App\Helpers;

use Request;

use App\Kota;
use App\Kecamatan;
use App\Kelurahan;

class DaerahHelper
{
  public static function CountKota($Id){
    $Kota = Kota::where('provinsi_id', $Id)
                ->get();
    return count($Kota);
  }

  public static function CountKecamatan($Id){
    $Kecamatan = Kecamatan::where('kota_id', 'LIKE', $Id.'%')
                          ->get();
    return count($Kecamatan);
  }

  public static function CountKelurahan($Id){
    $Kelurahan = Kelurahan::where('kecamatan_id', 'LIKE', $Id.'%')
                          ->get();
    return count($Kelurahan);
    $Kota = $Provinsi->Kota;
    $CountKelurahan = 0;
    foreach ($Kota as $DataKota) {
      foreach ($DataKota->Kecamatan as $DataKecamatan) {
        return count($DataKecamatan->Kelurahan);
      }
    }
    return $CountKelurahan;
  }
}
