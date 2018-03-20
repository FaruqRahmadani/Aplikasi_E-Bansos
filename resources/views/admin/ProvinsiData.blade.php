@extends('admin.layouts.master')
@section('tombol_tambah')
  <button type="button" class="btn btn-sm btn-primary">Tambah</button>
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
                  <th class="text-center"> Provinsi</th>
                  <th class="text-center"> Kab/Kota</th>
                  <th class="text-center"> Kecamatan</th>
                  <th class="text-center"> Kelurahan</th>
                  <th class="text-center"> Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($Provinsi as $DataProvinsi)
                  <tr>
                    <td>{{$DataProvinsi->nama_provinsi}}</td>
                    <td class="text-center">
                      {{Daerah::CountKota($DataProvinsi->id)}}
                    </td>
                    <td class="text-center">
                      {{Daerah::CountKecamatan($DataProvinsi->id)}}
                    </td>
                    <td class="text-center">
                      {{Daerah::CountKelurahan($DataProvinsi->id)}}
                    </td>
                    <td class="text-center">
                      <button type="button" class="btn btn-sm btn-primary">Info</button>
                      <button-edit
                        url = {{ route('Edit-Data-Provinsi', ['Id' => IDCrypt::Encrypt($DataProvinsi->id)]) }}
                      ></button-edit>
                      <button-delete
                        url = {{route('Delete-Data-Provinsi', ['id' => IDCrypt::Encrypt($DataProvinsi->id)])}}
                        jumlah = {{Daerah::CountKota($DataProvinsi->id)}}
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
