@extends('master_admin.layout')
@section('title')
  Informasi Detail
@endsection
@section('content')
  <div class="panel panel-container">
    <div class="row">
      <div class="col-md-12">
        <div class="panel panel-default">
          <div class="panel-heading">
            Data Instansi
          </div>
          <div class="panel-body">
            {{-- isian content --}}
            <div class="col-md-12">
              <div class="content">
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
                <br><br>
                <div class="pull-right">
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
                <!-- <div class="footer">
                <div class="legend">Keterangan lanjutan</div>
                <hr>
                <div class="stats"> Catatan </div>
              </div> -->
            </div>
            {{-- batas isian content --}}
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
