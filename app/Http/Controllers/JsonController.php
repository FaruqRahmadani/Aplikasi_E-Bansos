<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Kota;
use App\Pemohon;
use App\Provinsi;
use App\Instansi;
use App\Kecamatan;
use App\Kelurahan;

class JsonController extends Controller
{
  public function SearchNik($nik){
    $Pemohon = Pemohon::where('nik', $nik)
                      ->first();
    if ($Pemohon == null) {
      $Pemohon = 'null';
    }
    return response()->json($Pemohon);
  }

  public function DataDaerah(){
    $Provinsi = Provinsi::all();
    $Kota = Kota::all();
    $Kecamatan = Kecamatan::all();

    return response()->json(['Provinsi' => $Provinsi, 'Kota' => $Kota, 'Kecamatan' => $Kecamatan]);
  }

  public function DataDaerahBanjarbaru(){
    $Kecamatan = Kecamatan::where('kota_id', 6372)
                          ->get();

    foreach ($Kecamatan as $Index=>$DataKecamatan) {
      $IdKecamatan[$Index] = $DataKecamatan->id;
    }
    $Kelurahan = Kelurahan::whereIn('kecamatan_id', $IdKecamatan)
                          ->get();

    return response()->json(['Kecamatan' => $Kecamatan, 'Kelurahan' => $Kelurahan]);
  }

  public function DataKelurahan($IdKecamatan){
    $Kelurahan = Kelurahan::where('kecamatan_id', $IdKecamatan)
                          ->get();

    return response()->json($Kelurahan);
  }

  public function DataInstansi(){
    $Instansi = Instansi::all();

    return response()->json($Instansi);
  }
}
