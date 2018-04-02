@extends('admin.layouts.master')
@section('content')
  <div class="panel panel-container">
    <div class="row">
      <div class="col-md-12">
        <div class="panel panel-default">
          <div class="panel-heading">
            Data Instansi
          </div>
          <div class="panel-body">
            <div class="col-md-12">
              <div class="content">
                <table class="table table-bordered table-hover table-striped">
                  <tbody>
                    <tr>
                      <td width="30%" align="right">Nama Instansi</td>
                      <td><b>{{$Instansi->nama}}</b></td>
                    </tr>
                    <tr>
                      <td width="30%" align="right">Alamat</td>
                      <td><b>{{$Instansi->alamat}}</b></td>
                    </tr>
                    <tr>
                      <td width="30%" align="right">RT/RW</td>
                      <td>{{$Instansi->rt}} / {{$Instansi->rw}}</td>
                    </tr>
                    <tr>
                      <td width="30%" align="right">Kecamatan</td>
                      <td>{{$Instansi->Kecamatan->nama_kecamatan}}</td>
                    </tr>
                    <tr>
                      <td width="30%" align="right">Kelurahan</td>
                      <td>{{$Instansi->Kelurahan->nama_kelurahan}}</td>
                    </tr>
                  </tbody>
                </table>
                <br><br>
                <div class="pull-right">
                  <button-delete
                    url = {{ route('Delete-Data-Instansi', ['Id' => IDCrypt::Encrypt($Instansi->id)]) }}
                  ></button-delete>
                  <button-edit
                    url = {{ route('Edit-Data-Instansi', ['Id' => IDCrypt::Encrypt($Instansi->id)]) }}
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
