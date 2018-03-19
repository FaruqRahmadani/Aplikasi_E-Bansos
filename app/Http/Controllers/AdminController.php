<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Daerah;
use IDCrypt;

use App\Kota;
use App\Pemohon;
use App\Instansi;
use App\Proposal;
use App\Provinsi;
use App\Kecamatan;
use App\Kelurahan;
use App\StatusProposal;

class AdminController extends Controller
{
  public function Beranda(){
    return view('admin.Beranda');
  }

  public function InputData(){
    return view('admin.InputData');
  }

  public function SubmitInputData(Request $request){
    if (!$request->id_pemohon) {
      $Pemohon = new Pemohon;
      $Pemohon->nik = $request->nik_pemohon;
      $Pemohon->nama = $request->nama_pemohon;
      $Pemohon->tempat_lahir = $request->tempatlahir_pemohon;
      $Pemohon->tanggal_lahir = $request->tanggallahir_pemohon;
      $Pemohon->pekerjaan = $request->pekerjaan_pemohon;
      $Pemohon->alamat = $request->alamat_pemohon;
      $Pemohon->rt = $request->rt_pemohon;
      $Pemohon->rw = $request->rw_pemohon;
      $Pemohon->provinsi_id = $request->provinsi_id_pemohon;
      $Pemohon->kota_id = $request->kota_id_pemohon;
      $Pemohon->kecamatan_id = $request->kecamatan_id_pemohon;
      $Pemohon->kelurahan_id = $request->kelurahan_id_pemohon;
      $Pemohon->save();
      $PemohonId = Pemohon::orderBy('id', 'desc')
                          ->first()
                          ->id;
    }
    if (!$request->id_instansi) {
      $Instansi = new Instansi;
      $Instansi->nama = $request->nama_instansi;
      $Instansi->alamat = $request->alamat_instansi;
      $Instansi->rt = $request->rt_instansi;
      $Instansi->rw = $request->rw_instansi;
      $Instansi->kecamatan_id = $request->kecamatan_id_instansi;
      $Instansi->kelurahan_id = $request->kelurahan_id_instansi;
      $Instansi->save();
      $InstansiId = Instansi::orderBy('id', 'desc')
                            ->first()
                            ->id;
    }

    $Proposal = new Proposal;
    $Proposal->nomor = $request->nomor_proposal;
    $Proposal->tanggal_proposal = $request->tanggal_proposal;
    $Proposal->perihal = $request->perihal_proposal;
    $Proposal->kelengkapan = $request->kelengkapan_proposal;
    $Proposal->tanggal_masuk = $request->tanggalmasuk_proposal;
    $Proposal->kategori = $request->kategori_proposal;
    $Proposal->instansi_id = $request->id_instansi ? $request->id_instansi : $InstansiId;
    $Proposal->pemohon_id = $request->id_pemohon ? $request->id_pemohon : $PemohonId;
    $Proposal->save();

    $ProposalId = Proposal::orderBy('id', 'desc')
                          ->first()
                          ->id;

    $StatusProposal = new StatusProposal;
    $StatusProposal->proposal_id = $ProposalId;
    $StatusProposal->save();

    return redirect(route('Input-Data'))->with('success', 'Tambah Data Berhasil');
  }

  public function DataPemohon(){
    $Pemohon = Pemohon::all();

    return view('admin.PemohonData', ['Pemohon' => $Pemohon]);
  }

  public function DeleteDataPemohon($Id){
    $Id = IDCrypt::Decrypt($Id);
    $Pemohon = Pemohon::findOrFail($Id);
    $Pemohon->delete();

    return redirect(route('Data-Pemohon'))->with('success', 'Data Berhasil di Hapus');
  }

  public function EditDataPemohon($Id){
    $Id = IDCrypt::Decrypt($Id);
    $Pemohon = Pemohon::findOrFail($Id);
    $Provinsi = Provinsi::all();
    $Kota = Kota::all();
    $Kecamatan = Kecamatan::all();
    $Kelurahan = Kelurahan::all();

    return view('admin.PemohonEdit', ['Pemohon' => $Pemohon, 'Provinsi' => $Provinsi, 'Kota' => $Kota, 'Kecamatan' => $Kecamatan, 'Kelurahan' => $Kelurahan]);
  }

  public function submitEditDataPemohon(Request $request, $Id){
    $Id = IDCrypt::Decrypt($Id);
    $Pemohon = Pemohon::findOrFail($Id);
    $Pemohon->nik = $request->nik;
    $Pemohon->nama = $request->nama;
    $Pemohon->tempat_lahir = $request->tempat_lahir;
    $Pemohon->tanggal_lahir = $request->tanggal_lahir;
    $Pemohon->pekerjaan = $request->pekerjaan;
    $Pemohon->alamat = $request->alamat;
    $Pemohon->rt = $request->rt;
    $Pemohon->rw = $request->rw;
    $Pemohon->provinsi_id = $request->provinsi_id;
    $Pemohon->kota_id = $request->kota_id;
    $Pemohon->kecamatan_id = $request->kecamatan_id;
    $Pemohon->kelurahan_id = $request->kelurahan_id;
    $Pemohon->save();

    return redirect(route('Data-Pemohon'))->with('success', 'Data Berhasil di Edit');
  }

  public function InfoDataPemohon($Id){
    $Id = IDCrypt::Decrypt($Id);
    $Pemohon = Pemohon::findOrFail($Id);

    return view('admin.PemohonInfo', ['Pemohon' => $Pemohon]);
  }

  public function DataProvinsi(){
    $Provinsi = Provinsi::all();

    return view('admin.ProvinsiData', ['Provinsi' => $Provinsi]);
  }

  public function DeleteDataProvinsi($Id){
    $Id = IDCrypt::Decrypt($Id);
    $Provinsi = Provinsi::findOrFail($Id);
    $Provinsi->delete();

    return redirect(route('Data-Provinsi'))->with('success', 'Hapus Data Provinsi Berhasil');
  }
}
