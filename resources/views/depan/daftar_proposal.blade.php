@extends('master_public.layout')
@section('title')
  Data Proposal
@endsection
@section('content')
  <div class="panel panel-container">
    <div class="row">
      <div class="col-md-12">
        <div class="panel panel-default">
          {{-- <div class="panel-heading">
          Site Traffic Overview
        </div> --}}
        <div class="panel-body">
          {{-- isian content --}}
          <div class="col-md-12">
            <table id="table_id" class="table table-striped table-advance table-bordered">
              <thead>
                <tr>
                  <th style="text-align:center; width:14%;"> Tanggal Masuk</th>
                  <th style="text-align:center; width:14%;"> Nomor Proposal</th>
                  <th style="text-align:center;"> Nama Instansi</th>
                  <th style="text-align:center; width:15%;"> Kategori</th>
                  <th style="text-align:center; width:18%;"> Status</th>
                  <th style="text-align:center; width:10%;"> Action</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="text-align:center;">
                    12 Januari 2018
                  </td>
                  <td style="text-align:center;">
                    xx/xxx/xxx/xxx/1212
                  </td>
                  <td>
                    <b>Universitas ABC</b>
                  </td>
                  <td>
                    Kategori
                  </td>
                  <td>
                    {{-- status berkas masuk --}}
                    <div class="btn-sm bg-warning" align="center">Berkas Belum Lengkap</div>
                  </td>
                  <td  style="text-align:center;">
                    <a href="/daftar_proposal/detail_proposal">
                      <button type="button" class="btn btn-sm btn-primary">Info</button>
                    </a>
                  </td>
                  <tr>
                    <td style="text-align:center;">
                      12 Januari 2018
                    </td>
                    <td style="text-align:center;">
                      xx/xxx/xxx/xxx/1212
                    </td>
                    <td>
                      <b>Universitas ABC</b>
                    </td>
                    <td>
                      Kategori
                    </td>
                    <td>
                      {{-- status diproses --}}
                      <div class="btn-sm bg-info" align="center">Sedang Diproses</div>
                    </td>
                    <td  style="text-align:center;">
                      <a href="/daftar_proposal/detail_proposal">
                        <button type="button" class="btn btn-sm btn-primary">Info</button>
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <td style="text-align:center;">
                      12 Januari 2018
                    </td>
                    <td style="text-align:center;">
                      xx/xxx/xxx/xxx/1212
                    </td>
                    <td>
                      <b>Universitas ABC</b>
                    </td>
                    <td>
                      Kategori
                    </td>
                    <td>
                      {{-- status ditolak --}}
                      <div class="btn-sm bg-primary" align="center">Ditolak</div>
                    </td>
                    <td  style="text-align:center;">
                      <a href="/daftar_proposal/detail_proposal">
                        <button type="button" class="btn btn-sm btn-primary">Info</button>
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <td style="text-align:center;">
                      12 Januari 2018
                    </td>
                    <td style="text-align:center;">
                      xx/xxx/xxx/xxx/1212
                    </td>
                    <td>
                      <b>Universitas ABC</b>
                    </td>
                    <td>
                      Kategori
                    </td>
                    <td>
                      {{-- status diterima --}}
                      <div class="btn-sm bg-success" align="center">Diterima</div>
                    </td>
                    <td  style="text-align:center;">
                      <a href="/daftar_proposal/detail_proposal">
                        <button type="button" class="btn btn-sm btn-primary">Info</button>
                      </a>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            {{-- batas isian content --}}
          </div>
        </div>
      </div>
    </div>
  </div>

  <script type="text/javascript">
  $(document).ready(function() {
    $('#table_id').DataTable();
  });
  //bahasa
  $('#table_id').DataTable({
    language: {
      processing: "Sedang memproses...",
      search: "Cari Data&nbsp&nbsp;:&nbsp",
      lengthMenu: "Tampilkan _MENU_ data",
      info: "(&nbsp Menampilkan _START_ sampai _END_, dari _TOTAL_ data &nbsp)",
      infoEmpty: "Menampilkan 0 sampai 0 dari 0 data",
      infoFiltered: "(disaring dari _MAX_ data keseluruhan)",
      infoPostFix: "",
      zeroRecords: "Tidak ditemukan data yang sesuai",
      paginate: {
        previous: "Sebelumnya&nbsp",
        next: "&nbspSelanjutnya",
      }
    }
  });
</script>

@endsection
