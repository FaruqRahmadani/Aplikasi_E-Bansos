@extends('depan.layouts.master')
@section('content')
  <div class="panel panel-container">
    <div class="row">
      <div class="col-md-12">
        <div class="panel panel-default">
          <div class="panel-body">
            <div class="col-md-12">
              <table width="100%" id="table_id" class="table table-striped table-advance table-bordered">
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
                        {!!Proposal::LastStatus($DataProposal)!!}
                      </td>
                      <td  class="text-center">
                        <button-info
                          url = {{ route('Info-Daftar-Proposal', ['Id' => IDCrypt::Encrypt($DataProposal->id)]) }}
                        ></button-info>
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
