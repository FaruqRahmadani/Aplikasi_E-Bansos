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
                    <td class="text-center">{{Daerah::ProvinsiCountKota($DataProvinsi)}}</td>
                    <td class="text-center">{{Daerah::ProvinsiCountKecamatan($DataProvinsi)}}</td>
                    <td class="text-center">{{Daerah::ProvinsiCountKelurahan($DataProvinsi)}}</td>
                    <td class="text-center">
                      <button type="button" class="btn btn-sm btn-primary">Info</button>
                      <button type="button" class="btn btn-sm btn-warning">Edit</button>
                      <button type="button" class="btn btn-sm btn-danger">Hapus</button>
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
