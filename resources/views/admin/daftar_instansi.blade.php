@extends('master_admin.layout')
@section('title')
  Data Instansi
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
                  <th style="text-align:center; width:25%"> Nama Instansi</th>
                  <th style="text-align:center;"> Alamat</th>
                  <th style="text-align:center; width:18%;"> Kelurahan</th>
                  <th style="text-align:center; width:18%;"> Kecamatan</th>
                  <th style="text-align:center; width:16%;"> Action</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Universitas ABC</td>
                  <td>Jl. A. Yani RT 08 RW 08</td>
                  <td>Mentaos</td>
                  <td>Banjarbaru Utara</td>
                  <td  style="text-align:center;">
                    <a href="/admin/daftar_instansi/detail_instansi">
                      <button type="button" class="btn btn-sm btn-primary">Info</button>
                    </a>
                    <a href="#">
                      <button type="button" class="btn btn-sm btn-warning">Edit</button>
                    </a>
                    <a href="#">
                      <button type="button" class="btn btn-sm btn-danger">Hapus</button>
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