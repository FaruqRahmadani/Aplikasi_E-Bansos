@extends('admin.layouts.master')
@section('content')
  <div class="panel panel-container">
    <div class="row">
      <div class="col-md-12">
      <div class="panel-body">
        <div class="col-md-12">
          <div class="content">
            <h4>Data Pemohon</h4>
            <table class="table table-bordered table-hover table-striped">
              <tbody>
                <tr>
                  <td width="30%" class="text-right">NIK</td>
                  <td><b>{{$Proposal->Pemohon->nik}}</b></td>
                </tr>
                <tr>
                  <td width="30%" class="text-right">Nama</td>
                  <td><b>{{$Proposal->Pemohon->nama}}</b></td>
                </tr>
              </tbody>
            </table>
            <h4>Data Instansi</h4>
            <table class="table table-bordered table-hover table-striped">
              <tbody>
                <tr>
                  <td width="30%" class="text-right">Nama Instansi</td>
                  <td><b>{{$Proposal->Instansi->nama}}</b></td>
                </tr>
                <tr>
                  <td width="30%" class="text-right">Alamat</td>
                  <td>
                    {{$Proposal->Instansi->alamat}}
                  </td>
                </tr>
                <tr>
                  <td width="30%" class="text-right">Kecamatan</td>
                  <td>{{$Proposal->Instansi->Kecamatan->nama_kecamatan}}</td>
                </tr>
                <tr>
                  <td width="30%" class="text-right">Kelurahan</td>
                  <td>{{$Proposal->Instansi->Kelurahan->nama_kelurahan}}</td>
                </tr>
              </tbody>
            </table>
            <h4>Data Proposal</h4>
            <table class="table table-bordered table-hover table-striped">
              <tbody>
                <tr>
                  <td width="30%" class="text-right">Nomor Proposal</td>
                  <td><b>{{$Proposal->nomor}}</b></td>
                </tr>
                <tr>
                  <td width="30%" class="text-right">Tanggal Proposal</td>
                  <td>{{Tanggal::Output($Proposal->tanggal)}}</td>
                </tr>
                <tr>
                  <td width="30%" class="text-right">Tanggal Masuk</td>
                  <td>{{Tanggal::Output($Proposal->tanggal_masuk)}}</td>
                </tr>
                <tr>
                  <td width="30%" class="text-right">Kategori</td>
                  <td><b>
                    {{$Proposal->kategori}}
                  </b></td>
                </tr>
                <tr>
                  <td width="30%" class="text-right">Perihal</td>
                  <td>
                    {{$Proposal->perihal}}
                  </td>
                </tr>
                <tr>
                  <td width="30%" class="text-right">Status Terakhir</td>
                  <td>
                    {!!Proposal::LastStatus($Proposal)!!}
                  </td>
                </tr>
              </tbody>
            </table>
            <h4>Update</h4>
            <table class="table table-bordered table-hover table-striped">
              <thead>
                <th class="text-center" style="width: 15%">Tanggal</th>
                <th class="text-center">Nomor & Tujuan</th>
                <th class="text-center">Perihal</th>
                <th class="text-center">Status</th>
                <th class="text-center">Keterangan</th>
              </thead>
              <tbody>
                @foreach ($Proposal->StatusProposal as $StatusProposal)
                  <tr>
                    <td>{{Tanggal::Output($StatusProposal->created_at)}}</td>
                    <td>
                      <b>{{$StatusProposal->nomor_surat}}</b><br>
                      {{$StatusProposal->tujuan}}
                    </td>
                    <td>
                      {{$StatusProposal->perihal}}
                    </td>
                    <td>
                      {!!Proposal::Status($StatusProposal)!!}
                    </td>
                    <td>
                      {{$StatusProposal->keterangan}}
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
            <div class="pull-right">
              <a href="/admin/form_update">
                <button type="button" class="btn btn-success btn-fill">Update</button>
              </a>
              <a onclick="" href="">
                <button type="button" class="btn btn-danger btn-fill">Hapus</button>
              </a>
              <a href="">
                <button type="button" class="btn btn-info btn-fill">Edit</button>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
