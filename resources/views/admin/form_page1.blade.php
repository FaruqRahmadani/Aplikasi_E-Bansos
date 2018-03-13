@extends('admin.layouts.master')
@section('title')
  Input Data
@endsection
@section('content')
  <div class="panel panel-container">
    <div class="row">
      <div class="col-md-12">
        <div class="panel panel-default">
          <div class="panel-heading">
            Data Pemohon
          </div>
          <div class="panel-body">
            {{-- isian content --}}
            <div class="col-md-10 col-md-offset-1">
              <form action="/admin/form_page2" method="">
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>NIK</label>
                      <input type="text" class="form-control border-input" maxlength="16" placeholder="16 digit NIK" value="">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Nama Lengkap</label>
                      <input type="text" class="form-control border-input required" maxlength="100" name="nama" id="nama" value="" placeholder="nama lengkap">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Tempat Lahir </label>
                      <input type="text" class="form-control border-input" maxlength="30" name="tempat_lahir" id="tempat_lahir" placeholder="tempat lahir">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="tanggal_lahir">Tanggal Lahir</label>
                      <input type="date" class="form-control border-input" name="tanggal_lahir">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Pekerjaan</label>
                      <input type="text" class="form-control border-input" maxlength="30" name="pekerjaan" id="pekerjaan" placeholder="pekerjaan">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Alamat</label>
                      <textarea rows="5" class="form-control border-input" maxlength="100" placeholder="Alamat Lengkap" name="alamat" id="alamat"></textarea>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>RT</label>
                      <input type="text" class="form-control border-input" maxlength="3" name="rt" id="rt" placeholder="RT">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>RW</label>
                      <input type="text" class="form-control border-input" maxlength="3" name="rw" id="rw" placeholder="RW">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Provinsi</label>
                      <select class="form-control" name="">
                        <option value="">--Provinsi--</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Kabupaten/Kota</label>
                      <select class="form-control" name="">
                        <option value="">--Kabupaten/Kota--</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Kecamatan</label>
                      <select class="form-control" name="">
                        <option value="">--Kecamatan--</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12 ">
                    <div class="form-group">
                      <label>Kelurahan</label>
                      <select class="form-control" name="">
                        <option value="">--Kelurahan--</option>
                      </select>
                    </div>
                  </div>
                </div>
                <br>
                <div class="row">
                  <div class="col-md-12">
                    <div class="text-center">
                      <div class="pull-right" >
                        <button type="reset" class="btn btn-warning btn-fill" >Ulang</button>
                        <button type="submit" id="submit" class="btn btn-info btn-fill" >Selanjutnya</button>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
            </div>
            {{-- batas isian content --}}
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
