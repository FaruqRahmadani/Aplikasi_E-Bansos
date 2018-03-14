@extends('admin.layouts.master')
@section('content')
  <div class="panel panel-container">
    <div class="row">
      <div class="col-md-12">
        <div class="panel panel-default">
          {{-- <div class="panel-heading">
          Site Traffic Overview
        </div> --}}
        <div class="panel-body">
          <div class="col-md-12">
            <table id="table_id" class="table table-striped table-advance table-bordered">
              <thead>
                <tr>
                  <th class="text-center"> NIK</th>
                  <th class="text-center"> Nama</th>
                  <th class="text-center"> Alamat</th>
                  <th class="text-center" style="width: 25%"> Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($Pemohon as $Index => $DataPemohon)
                  <tr>
                    <td class="text-center">
                      {{$DataPemohon->nik}}
                    </td>
                    <td>
                      <b>{{$DataPemohon->nama}}</b>
                    </td>
                    <td>
                      {{$DataPemohon->alamat}}
                    </td>
                    <td  class="text-center">
                      <a href="/admin/daftar_pemohon/detail_pemohon">
                        <button type="button" class="btn btn-sm btn-primary">Info</button>
                      </a>
                      <button-edit
                        url = {{ route('Edit-Data-Pemohon', ['Id' => IDCrypt::Encrypt($DataPemohon->id)]) }}
                      ></button-edit>
                      <button-delete
                        url = {{ route('Delete-Data-Pemohon', ['Id' => IDCrypt::Encrypt($DataPemohon->id)]) }}
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
