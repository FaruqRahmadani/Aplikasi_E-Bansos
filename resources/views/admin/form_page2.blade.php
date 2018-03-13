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
            Data Instansi
          </div>
          <div class="panel-body">
            {{-- isian content --}}
            <div class="col-md-10 col-md-offset-1">
              <form action="/admin/form_page3" method="">
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Nama Instansi</label>
                      <input type="text" class="form-control border-input required" maxlength="100" name="nama" id="nama" value="" placeholder="nama Instansi">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Alamat Instansi</label>
                      <textarea rows="5" class="form-control border-input" maxlength="100" placeholder="Alamat instansi" name="alamat" id="alamat"></textarea>
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
                      <label>Kecamatan</label>
                      <select class="form-control" name="">
                        <option value="">--Kecamatan--</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
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
