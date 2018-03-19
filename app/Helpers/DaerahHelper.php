<?php
namespace App\Helpers;

use Request;

use App\Kota;
use App\Kecamatan;
use App\Kelurahan;

class DaerahHelper
{
  public static function CountKota($ProvinsiId){
    $Kota = Kota::where('provinsi_id', $ProvinsiId)
                ->get();
    return count($Kota);
  }

  public static function CountKecamatan($ProvinsiId){
    $Kecamatan = Kecamatan::where('kota_id', 'LIKE', $ProvinsiId.'%')
                          ->get();
    return count($Kecamatan);
  }

  public static function CountKelurahan($ProvinsiId){
    $Kelurahan = Kelurahan::where('kecamatan_id', 'LIKE', $ProvinsiId.'%')
                          ->get();
    return count($Kelurahan);
    $Kota = $Provinsi->Kota;
    $CountKelurahan = 0;
    // return 'Error Kam';
    foreach ($Kota as $DataKota) {
      foreach ($DataKota->Kecamatan as $DataKecamatan) {
        return count($DataKecamatan->Kelurahan);
      }
    }
    return $CountKelurahan;
  }
}
