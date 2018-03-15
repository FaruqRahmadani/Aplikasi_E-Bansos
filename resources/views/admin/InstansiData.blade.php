@extends('admin.layouts.master')
@section('title')
  Data Instansi
@endsection
@section('content')
  <div class="panel panel-container">
    <div class="row">
      <div class="col-md-12">
        <div class="panel panel-default">
          <div class="panel-body">
            <div class="col-md-12">
              <table id="table_id" class="table table-striped table-advance table-bordered">
                <thead>
                  <tr>
                    <th class="text-center"> Nama Instansi</th>
                    <th class="text-center"> Alamat</th>
                    <th class="text-center"> Kelurahan</th>
                    <th class="text-center"> Kecamatan</th>
                    <th class="text-center"> Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($Instansi as $DataInstansi)
                    <tr>
                      <td>{{ $DataInstansi->nama }}</td>
                      <td>{{ $DataInstansi->alamat }}</td>
                      <td>{{ $DataInstansi->Kelurahan->nama_kelurahan }}</td>
                      <td>{{ $DataInstansi->Kecamatan->nama_kecamatan }}</td>
                      <td class="text-center">
                        <button-info></button-info>
                        <button-edit></button-edit>
                        <button-delete
                          url = {{ route('Delete-Data-Instansi', ['Id' => IDCrypt::Encrypt($DataInstansi->id)]) }}
                        ></button-delete>
                      </td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
