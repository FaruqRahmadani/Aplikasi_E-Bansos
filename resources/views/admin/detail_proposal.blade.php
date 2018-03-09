@extends('master_admin.layout')
@section('title')
  Informasi Detail
@endsection
@section('content')
  <div class="panel panel-container">
    <div class="row">
      <div class="col-md-12">
        {{-- <div class="panel panel-default">
        <div class="panel-heading">
        Data Proposal
      </div> --}}
      <div class="panel-body">
        {{-- isian content --}}
        <div class="col-md-12">
          <div class="content">
            <h4>Data Pemohon</h4>
            <table class="table table-bordered table-hover table-striped">
              <tbody>
                <tr>
                  <td width="30%" align="right">NIK</td>
                  <td><b>1234567890123456</b></td>
                </tr>
                <tr>
                  <td width="30%" align="right">Nama</td>
                  <td><b>Jhon Doe</b></td>
                </tr>
              </tbody>
            </table>
            {{-- batas data pemohon --}}
            <h4>Data Instansi</h4>
            <table class="table table-bordered table-hover table-striped">
              <tbody>
                <tr>
                  <td width="30%" align="right">Nama Instansi</td>
                  <td><b>Universitas ABC</b></td>
                </tr>
                <tr>
                  <td width="30%" align="right">Alamat</td>
                  <td>
                    Jl. A. Yani Km 45 No. 14, Kel. Mentaos - Kec. Banjarbaru Utara
                  </td>
                </tr>
                <tr>
                  <td width="30%" align="right">Kabupaten / Kota</td>
                  <td>Kota Banjarbaru</td>
                </tr>
                <tr>
                  <td width="30%" align="right">Provinsi</td>
                  <td>Kalimantan Selatan</td>
                </tr>
              </tbody>
            </table>
            {{-- batas data instansi --}}
            {{-- batas data pemohon --}}
            <h4>Data Proposal</h4>
            <table class="table table-bordered table-hover table-striped">
              <tbody>
                <tr>
                  <td width="30%" align="right">Nomor Proposal</td>
                  <td><b>XXX/XXX/XXXX/XXXX</b></td>
                </tr>
                <tr>
                  <td width="30%" align="right">Tanggal Proposal</td>
                  <td>14 Ferbruari 2018</td>
                </tr>
                <tr>
                  <td width="30%" align="right">Tanggal Masuk</td>
                  <td>20 Ferbruari 2018</td>
                </tr>
                <tr>
                  <td width="30%" align="right">Kategori</td>
                  <td><b>
                    Kategori Bantuan Sosial
                  </b></td>
                </tr>
                <tr>
                  <td width="30%" align="right">Perihal</td>
                  <td>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                  </td>
                </tr>
                <tr>
                  <td width="30%" align="right">Status Terakhir</td>
                  <td>
                    <span class="indicator label-info"></span>Sedang Diproses
                  </td>
                </tr>
              </tbody>
            </table>
            {{-- batas data Proposal --}}
            <h4>Update</h4>
            <table class="table table-bordered table-hover table-striped">
              <thead>
                <th style="text-align:center; width:15%;">Tanggal</th>
                <th style="text-align:center;">Nomor & Tujuan</th>
                <th style="text-align:center; width:20%;">Perihal</th>
                <th style="text-align:center; width:40%;">Keterangan</th>
              </thead>
              <tbody>
                <tr>
                  <td>20 Februari 2018</td>
                  <td>
                    <b>XXX/XXX/XXXX/XXXX</b><br>
                    Walikota Banjarbaru
                  </td>
                  <td>
                    Permohonan Bantuan
                  </td>
                  <td>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                  </td>
                </tr>
              </tbody>
            </table>
            {{-- batas data Update --}}
            <br><br>

            <div class="pull-right">
              <a href="/admin/form_update">
                <button type="button" class="btn btn-success btn-fill">Update</button>
              </a>
              <a onclick="" href="">
                <button type="button" class="btn btn-danger btn-fill">Hapus</button>
              </a>
              <a href="">
                <button type="button" class="btn btn-info btn-fill">Edit</button>
              </a>
            </div>
            <br>
            <br>
            <br>
          </div>
          {{-- batas isian content --}}
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
