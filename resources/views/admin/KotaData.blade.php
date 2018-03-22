@extends('admin.layouts.master')
@section('content')
  <div class="panel panel-container">
    <div class="row">
      <div class="col-md-12">
        <div class="panel panel-default">
          <div class="panel-heading no-padding-top">
            <button-header
            judul='Tambah Data Kota'
            url={{route('Tambah-Data-Kota')}}
            ></button-header>
          </div>
          <div class="panel-body">
            <div class="col-md-12">
              <table id="table_id" class="table table-striped table-advance table-bordered">
                <thead>
                  <tr>
                    <th class="text-center"> Kab/Kota</th>
                    <th class="text-center"> Provinsi</th>
                    <th class="text-center"> Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($Kota as $DataKota)
                    <tr>
                      <td> {{$DataKota->nama_kota}}</td>
                      <td> {{$DataKota->Provinsi->nama_provinsi}}</td>
                      <td class="text-center">
                        <button-edit
                        url = {{ route('Edit-Data-Kota', ['Id' => IDCrypt::Encrypt($DataKota->id)]) }}
                        ></button-edit>
                        <button-delete
                        url = {{route('Delete-Data-Kota', ['id' => IDCrypt::Encrypt($DataKota->id)])}}
                        jumlah = {{Daerah::CountKecamatan($DataKota->id)}}
                        ></button-delete>
                      </td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
            {{-- batas isian content --}}
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
