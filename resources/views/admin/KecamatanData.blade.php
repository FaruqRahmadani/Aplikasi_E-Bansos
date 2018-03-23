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
                    <th class="text-center"> Kecamatan</th>
                    <th class="text-center"> Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($Kecamatan as $DataKecamatan)
                    <tr>
                      <td> {{$DataKecamatan->nama_kecamatan}}</td>
                      <td  class="text-center">
                        <button-edit
                          url = {{ route('Edit-Data-Kecamatan', ['Id' => IDCrypt::Encrypt($DataKecamatan->id)]) }}
                        ></button-edit>
                        <button-delete
                          url = {{route('Delete-Data-Kecamatan', ['id' => IDCrypt::Encrypt($DataKecamatan->id)])}}
                          {{-- jumlah = {{$DataKecamatan->Kelurahan->count()}} --}}
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
  </div>
@endsection
