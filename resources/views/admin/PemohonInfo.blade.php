@extends('admin.layouts.master')
@section('content')
  <div class="panel panel-container">
    <div class="row">
      <div class="col-md-12">
        <div class="panel panel-default">
          <div class="panel-heading">
            Data Pemohon
          </div>
          <div class="panel-body">
            <div class="col-md-12">
              <div class="content">
                <table class="table table-bordered table-hover table-striped">
                  <tbody>
                    <tr>
                      <td width="30%" align="right">NIK</td>
                      <td><b>{{$Pemohon->nik}}</b></td>
                    </tr>
                    <tr>
                      <td width="30%" align="right">Nama</td>
                      <td><b>{{$Pemohon->nama}}</b></td>
                    </tr>
                    <tr>
                      <td width="30%" align="right">Tempat, Tanggal Lahir</td>
                      <td>{{$Pemohon->tempat_lahir}}, {{Tanggal::Output($Pemohon->tanggal_lahir)}}</td>
                    </tr>
                    <tr>
                      <td width="30%" align="right">Pekerjaan</td>
                      <td>{{$Pemohon->pekerjaan}}</td>
                    </tr>
                    <tr>
                      <td width="30%" align="right">Alamat</td>
                      <td>
                        {{$Pemohon->alamat}}
                      </td>
                    </tr>
                    <tr>
                      <td width="30%" align="right">Kabupaten / Kota</td>
                      <td>{{$Pemohon->Kota->nama_kota}}</td>
                    </tr>
                    <tr>
                      <td width="30%" align="right">Provinsi</td>
                      <td>{{$Pemohon->Provinsi->nama_provinsi}}</td>
                    </tr>
                  </tbody>
                </table>
                <br><br>
                <div class="pull-right">
                  <button-delete
                    url = {{ route('Delete-Data-Pemohon', ['Id' => IDCrypt::Encrypt($Pemohon->id)]) }}
                  ></button-delete>
                  <button-edit
                    url = {{ route('Edit-Data-Pemohon', ['Id' => IDCrypt::Encrypt($Pemohon->id)]) }}
                  ></button-edit>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
