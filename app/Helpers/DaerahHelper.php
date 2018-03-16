<?php
namespace App\Helpers;

use Request;

class DaerahHelper
{
  public static function ProvinsiCountKota($Provinsi){
    return count($Provinsi->Kota);
  }

  public static function ProvinsiCountKecamatan($Provinsi){
    $Kota = $Provinsi->Kota;
    $CountKecamatan = 0;
    foreach ($Kota as $DataKota) {
      $CountKecamatan+=Count($DataKota->Kecamatan);
    }
    return $CountKecamatan;
  }

  public static function ProvinsiCountKelurahan($Provinsi){
    $Kota = $Provinsi->Kota;
    $CountKelurahan = 0;
    foreach ($Kota as $DataKota) {
      foreach ($DataKota->Kecamatan as $DataKecamatan) {
        $CountKelurahan = count($DataKecamatan->Kelurahan);
      }
    }
    return $CountKelurahan;
  }
}
