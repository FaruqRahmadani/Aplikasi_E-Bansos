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
                  <tr>
                    <td>Universitas ABC</td>
                    <td>Jl. A. Yani RT 08 RW 08</td>
                    <td>Mentaos</td>
                    <td>Banjarbaru Utara</td>
                    <td class="text-center">
                      <button-info></button-info>
                      <button-edit></button-edit>
                      <button-delete></button-delete>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
