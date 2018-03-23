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
                    <th class="text-center"> Tanggal Masuk</th>
                    <th class="text-center"> Nomor Proposal</th>
                    <th class="text-center"> Nama Instansi</th>
                    <th class="text-center"> Kategori</th>
                    <th class="text-center"> Status</th>
                    <th class="text-center"> Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($Proposal as $DataProposal)
                    <tr>
                      <td class="text-center">
                        {{Tanggal::Output($DataProposal->tanggal_masuk)}}
                      </td>
                      <td class="text-center">
                        {{$DataProposal->nomor}}
                      </td>
                      <td>
                        <b>{{$DataProposal->Instansi->nama}}</b>
                      </td>
                      <td>
                        {{$DataProposal->kategori}}
                      </td>
                      <td>
                        {!!Proposal::Status($DataProposal)!!}
                      </td>
                      <td  class="text-center">
                        <a href="/admin/daftar_proposal/detail_proposal">
                          <button type="button" class="btn btn-sm btn-primary">Info</button>
                        </a>
                        <a href="#">
                          <button type="button" class="btn btn-sm btn-warning">Edit</button>
                        </a>
                        <button-delete
                          url =
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
