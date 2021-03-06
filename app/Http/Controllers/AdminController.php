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
    $Proposal = Proposal::all();

    return view('admin.Beranda', ['Proposal' => $Proposal]);
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

  public function EditDataProvinsi($Id){
    $Id = IDCrypt::Decrypt($Id);
    $Provinsi = Provinsi::findOrFail($Id);

    return view('admin.ProvinsiEdit', ['Provinsi' => $Provinsi]);
  }

  public function SubmitEditDataProvinsi(Request $request, $Id){
    $Id = IDCrypt::Decrypt($Id);
    $Provinsi = Provinsi::findOrFail($Id);
    $Provinsi->nama_provinsi = $request->nama_provinsi;
    $Provinsi->save();

    return redirect(route('Data-Provinsi'))->with('success', 'Edit Data Provinsi Berhasil');
  }

  public function TambahDataProvinsi(){
    return view('admin.ProvinsiTambah');
  }

  public function SubmitTambahDataProvinsi(Request $request){
    $Provinsi = new Provinsi;
    $Provinsi->nama_provinsi = $request->nama_provinsi;
    $Provinsi->save();

    return redirect(route('Data-Provinsi'))->with('success', 'Tambah Data Provinsi Berhasil');
  }

  public function DataKota(){
    $Kota = Kota::all();
    return view('admin.KotaData', ['Kota' => $Kota]);
  }

  public function DeleteDataKota($Id){
    $Id = IDCrypt::Decrypt($Id);
    $Kota = Kota::findOrFail($Id);
    $Kota->delete();

    return redirect(route('Data-Kota'))->with('success', 'Hapus Data Kota Berhasil');
  }

  public function EditDataKota($Id){
    $Id = IDCrypt::Decrypt($Id);
    $Kota = Kota::findOrFail($Id);
    $Provinsi = Provinsi::all();

    return view('admin.KotaEdit', ['Kota' => $Kota, 'Provinsi' => $Provinsi]);
  }

  public function submitEditDataKota(Request $request, $Id){
    $Id = IDCrypt::Decrypt($Id);
    $Kota = Kota::findOrFail($Id);
    $Kota->nama_kota = $request->nama_kota;
    $Kota->provinsi_id = $request->provinsi_id;
    $Kota->save();

    return redirect(route('Data-Kota'))->with('success', 'Edit Data Kota Berhasil');
  }

  public function TambahDataKota(){
    $Provinsi = Provinsi::all();

    return view('admin.KotaTambah', ['Provinsi' => $Provinsi]);
  }

  public function submitTambahDataKota(Request $request){
    $Kota = new Kota;
    $Kota->nama_kota = $request->nama_kota;
    $Kota->provinsi_id = $request->provinsi_id;
    $Kota->save();

    return redirect(route('Data-Kota'))->with('success', 'Tambah Data Kota Berhasil');
  }

  public function DataKecamatan(){
    $Kecamatan = Kecamatan::all();

    return view('admin.KecamatanData', ['Kecamatan' => $Kecamatan]);
  }

  public function DeleteDataKecamatan(){
    dd('Maaf something wrong, bingung logikanya kyp ni');
  }

  public function EditDataKecamatan($Id){
    $Id = IDCrypt::Decrypt($Id);
    $Kecamatan = Kecamatan::findOrFail($Id);

    return view('admin.KecamatanEdit', ['Kecamatan' => $Kecamatan]);
  }

  public function submitEditDataKecamatan(Request $request, $Id){
    $Id = IDCrypt::Decrypt($Id);
    $Kecamatan = Kecamatan::findOrFail($Id);
    $Kecamatan->nama_kecamatan = $request->nama_kecamatan;
    $Kecamatan->kota_id = $request->kota_id;
    $Kecamatan->save();

    return redirect(route('Data-Kecamatan'))->with('success', 'Edit Data Kecamatan Berhasil');
  }

  public function TambahDataKecamatan(){
    return view('admin.KecamatanTambah');
  }

  public function submitTambahDataKecamatan(Request $request){
    $Kecamatan = new Kecamatan;
    $Kecamatan->nama_kecamatan = $request->nama_kecamatan;
    $Kecamatan->kota_id = $request->kota_id;
    $Kecamatan->save();

    return redirect(route('Data-Kecamatan'))->with('success', 'Tambah Data Kecamatan Berhasil');
  }

  public function DataKelurahan(){
    $Kelurahan = Kelurahan::all();
    dd($Kelurahan);

    return view('admin.KelurahanData', ['Kelurahan' => $Kelurahan]);
  }

  public function DataProposal(){
    $Proposal = Proposal::all();

    return view('admin.ProposalData', ['Proposal' => $Proposal]);
  }

  public function DeleteDataProposal($Id){
    $Id = IDCrypt::Decrypt($Id);
    $Proposal = Proposal::findOrFail($Id);
    $Proposal->delete();

    return redirect(route('Data-Proposal'))->with('success', 'Data Berhasil di Hapus');
  }

  public function InfoDataProposal($Id){
    $Id = IDCrypt::Decrypt($Id);
    $Proposal = Proposal::findOrFail($Id);

    return view('admin.ProposalInfo', ['Proposal' => $Proposal]);
  }

  public function UpdateDataProposal($Id){
    return view('admin.ProposalUpdate', ['Id' => $Id]);
  }

  public function submitUpdateDataProposal(Request $request, $Id){
    $Id = IDCrypt::Decrypt($Id);
    $StatusProposal = new StatusProposal;
    $StatusProposal->tujuan = $request->tujuan;
    $StatusProposal->nomor_surat = $request->nomor_surat;
    $StatusProposal->perihal = $request->perihal;
    $StatusProposal->status = $request->status;
    $StatusProposal->keterangan = $request->keterangan;
    $StatusProposal->proposal_id = $Id;
    $StatusProposal->save();

    return redirect(route('Data-Proposal'))->with('success', 'Data Status Proposal Berhasil di Update');
  }

  public function EditDataProposal($Id){
    $Id = IDCrypt::Decrypt($Id);
    $Proposal = Proposal::findOrFail($Id);

    return view('admin.ProposalEdit', ['Proposal' => $Proposal]);
  }

  public function submitEditDataProposal(Request $request, $Id){
    $Id = IDCrypt::Decrypt($Id);
    $Proposal = Proposal::findOrFail($Id);
    $Proposal->nomor = $request->nomor_proposal;
    $Proposal->tanggal_proposal = $request->tanggal_proposal;
    $Proposal->perihal = $request->perihal_proposal;
    $Proposal->kelengkapan = $request->kelengkapan_proposal;
    $Proposal->tanggal_masuk = $request->tanggalmasuk_proposal;
    $Proposal->kategori = $request->kategori_proposal;

    $Proposal->save();

    return redirect(route('Data-Proposal'))->with('success', 'Data Status Proposal Berhasil di Edit');
  }

  public function DataInstansi(){
    $Instansi = Instansi::all();

    return view('admin.InstansiData', ['Instansi' => $Instansi]);
  }

  public function DeleteDataInstansi($Id){
    $Id = IDCrypt::Decrypt($Id);
    $Instansi = Instansi::findOrFail($Id);
    $Instansi->delete();

    return redirect(route('Data-Instansi'))->with('success', 'Data Berhasil di Delete');
  }

  public function EditDataInstansi($Id){
    $Id = IDCrypt::Decrypt($Id);
    $Instansi = Instansi::findOrFail($Id);

    return view('admin.InstansiEdit', ['Instansi' => $Instansi]);
  }

  public function SubmitEditDataInstansi(Request $request, $Id){
    $Id = IDCrypt::Decrypt($Id);
    $Instansi = Instansi::findOrFail($Id);

    $Instansi->nama = $request->nama;
    $Instansi->alamat = $request->alamat;
    $Instansi->rt = $request->rt;
    $Instansi->rw = $request->rw;
    $Instansi->kecamatan_id = $request->kecamatan_id;
    $Instansi->kelurahan_id = $request->kelurahan_id;

    $Instansi->save();

    return redirect(route('Data-Instansi'))->with('success', 'Data Berhasil di Edit');
  }

  public function InfoDataInstansi($Id){
    $Id = IDCrypt::Decrypt($Id);
    $Instansi = Instansi::findOrFail($Id);

    return view('admin.InstansiInfo', ['Instansi' => $Instansi]);
  }
}
