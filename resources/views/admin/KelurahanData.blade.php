@extends('admin.layouts.master')
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
                    <th class="text-center"> Kelurahan</th>
                    <th class="text-center"> Kecamatan</th>
                    <th class="text-center"> Kab/Kota</th>
                    <th class="text-center"> Provinsi</th>
                    <th class="text-center"> Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($Kelurahan as $DataKelurahan)
                    <tr>
                      <td> Mentaos</td>
                      <td> Banjarbaru Utara</td>
                      <td> Banjarbaru</td>
                      <td> Kalimantan Selatan</td>
                      <td  class="text-center">
                        <button type="button" class="btn btn-sm btn-warning">Edit</button>
                        <button type="button" class="btn btn-sm btn-danger">Hapus</button>
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
