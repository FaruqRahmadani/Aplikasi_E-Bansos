@extends('master_admin.layout')
@section('title')
  Beranda
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
                    <th><i class="icon_profile"></i> Full Name</th>
                    <th><i class="icon_calendar"></i> Date</th>
                    <th><i class="icon_mail_alt"></i> Email</th>
                    <th><i class="icon_pin_alt"></i> City</th>
                    <th><i class="icon_mobile"></i> Mobile</th>
                    <th><i class="icon_cogs"></i> Action</th>
                  </tr>
                </thead>


                <tbody>
                  <tr>
                    <td>Angeline Mcclain</td>
                    <td>2004-07-06</td>
                    <td>dale@chief.info</td>
                    <td>Rosser</td>
                    <td>176-026-5992</td>
                    <td>
                      <div class="btn-group">
                        <a class="btn btn-primary" href="#"><i class="icon_plus_alt2"></i></a>
                        <a class="btn btn-success" href="#"><i class="icon_check_alt2"></i></a>
                        <a class="btn btn-danger" href="#"><i class="icon_close_alt2"></i></a>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>Sung Carlson</td>
                    <td>2011-01-10</td>
                    <td>ione.gisela@high.org</td>
                    <td>Robert Lee</td>
                    <td>724-639-4784</td>
                    <td>
                      <div class="btn-group">
                        <a class="btn btn-primary" href="#"><i class="icon_plus_alt2"></i></a>
                        <a class="btn btn-success" href="#"><i class="icon_check_alt2"></i></a>
                        <a class="btn btn-danger" href="#"><i class="icon_close_alt2"></i></a>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>Bryon Osborne</td>
                    <td>2006-10-29</td>
                    <td>sol.raleigh@language.edu</td>
                    <td>York</td>
                    <td>180-456-0056</td>
                    <td>
                      <div class="btn-group">
                        <a class="btn btn-primary" href="#"><i class="icon_plus_alt2"></i></a>
                        <a class="btn btn-success" href="#"><i class="icon_check_alt2"></i></a>
                        <a class="btn btn-danger" href="#"><i class="icon_close_alt2"></i></a>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>Dalia Marquez</td>
                    <td>2011-12-15</td>
                    <td>angeline.frieda@thick.com</td>
                    <td>Alton</td>
                    <td>690-601-1922</td>
                    <td>
                      <div class="btn-group">
                        <a class="btn btn-primary" href="#"><i class="icon_plus_alt2"></i></a>
                        <a class="btn btn-success" href="#"><i class="icon_check_alt2"></i></a>
                        <a class="btn btn-danger" href="#"><i class="icon_close_alt2"></i></a>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>Selina Fitzgerald</td>
                    <td>2003-01-06</td>
                    <td>moshe.mikel@parcelpart.info</td>
                    <td>Waelder</td>
                    <td>922-810-0915</td>
                    <td>
                      <div class="btn-group">
                        <a class="btn btn-primary" href="#"><i class="icon_plus_alt2"></i></a>
                        <a class="btn btn-success" href="#"><i class="icon_check_alt2"></i></a>
                        <a class="btn btn-danger" href="#"><i class="icon_close_alt2"></i></a>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>Abraham Avery</td>
                    <td>2006-07-14</td>
                    <td>harvey.jared@pullpump.org</td>
                    <td>Harker Heights</td>
                    <td>511-175-7115</td>
                    <td>
                      <div class="btn-group">
                        <a class="btn btn-primary" href="#"><i class="icon_plus_alt2"></i></a>
                        <a class="btn btn-success" href="#"><i class="icon_check_alt2"></i></a>
                        <a class="btn btn-danger" href="#"><i class="icon_close_alt2"></i></a>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>Caren Mcdowell</td>
                    <td>2002-03-29</td>
                    <td>valeria@hookhope.org</td>
                    <td>Blackwell</td>
                    <td>970-147-5550</td>
                    <td>
                      <div class="btn-group">
                        <a class="btn btn-primary" href="#"><i class="icon_plus_alt2"></i></a>
                        <a class="btn btn-success" href="#"><i class="icon_check_alt2"></i></a>
                        <a class="btn btn-danger" href="#"><i class="icon_close_alt2"></i></a>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>Owen Bingham</td>
                    <td>2013-04-06</td>
                    <td>thomas.christopher@firstfish.info</td>
                    <td>Rule</td>
                    <td>934-118-6046</td>
                    <td>
                      <div class="btn-group">
                        <a class="btn btn-primary" href="#"><i class="icon_plus_alt2"></i></a>
                        <a class="btn btn-success" href="#"><i class="icon_check_alt2"></i></a>
                        <a class="btn btn-danger" href="#"><i class="icon_close_alt2"></i></a>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>Ahmed Dean</td>
                    <td>2008-03-19</td>
                    <td>lakesha.geri.allene@recordred.com</td>
                    <td>Darrouzett</td>
                    <td>338-081-8817</td>
                    <td>
                      <div class="btn-group">
                        <a class="btn btn-primary" href="#"><i class="icon_plus_alt2"></i></a>
                        <a class="btn btn-success" href="#"><i class="icon_check_alt2"></i></a>
                        <a class="btn btn-danger" href="#"><i class="icon_close_alt2"></i></a>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>Mario Norris</td>
                    <td>2010-02-08</td>
                    <td>mildred@hour.info</td>
                    <td>Amarillo</td>
                    <td>945-547-5302</td>
                    <td>
                      <div class="btn-group">
                        <a class="btn btn-primary" href="#"><i class="icon_plus_alt2"></i></a>
                        <a class="btn btn-success" href="#"><i class="icon_check_alt2"></i></a>
                        <a class="btn btn-danger" href="#"><i class="icon_close_alt2"></i></a>
                      </div>
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
