<?php
namespace App\Helpers;

use Carbon\Carbon;

class TanggalHelper
{
  public static function Output($Date){
    $Bulan = [
      1  => 'Januari',
      2  => 'Februari',
      3  => 'Maret',
      4  => 'April',
      5  => 'Mei',
      6  => 'Juni',
      7  => 'Juli',
      8  => 'Agustus',
      9  => 'September',
      10 => 'Oktober',
      11 => 'November',
      12 => 'Desember'
    ];

    $Tanggal = Carbon::parse($Date)->format('j');
    $Bulan = $Bulan[Carbon::parse($Date)->format('n')];
    $Tahun = Carbon::parse($Date)->format('Y');

    return $Tanggal.' '.$Bulan.' '.$Tahun;
  }

  public static function JudulRoute(){
    $CurrentRouteName = Request::route()->getName();
    return title_case(str_slug($CurrentRouteName, ' ', '-'));
  }
}
