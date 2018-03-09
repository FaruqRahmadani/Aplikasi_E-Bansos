@extends('master_admin.layout')
@section('title')
  Input Data
@endsection
@section('content')
  <div class="panel panel-container">
    <div class="row">
      <div class="col-md-12">
        <div class="panel panel-default">
          <div class="panel-heading">
            Data Proposal
          </div>
          <div class="panel-body">
            {{-- isian content --}}
            <div class="col-md-10 col-md-offset-1">
              <form action="/admin/form_page2" method="">
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="">Nomor Proposal</label>
                      <input type="text" class="form-control border-input" placeholder="Nomor Proposal" name="nomor" value="">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="">Tanggal Proposal</label>
                      <input type="date" class="form-control border-input" name="tanggal">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Perihal</label>
                      <textarea rows="3" class="form-control border-input" placeholder="Perihal terkait proposal" name="perihal" id="perihal"></textarea>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Kelengkapan Berkas </label>
                      <div class="radio">
                        <label>
                          <input type="radio" name="kelengkapan" id="" value="option1" >Lengkap
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="kelengkapan" id="" value="option2">Belum Lengkap
                        </label>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="">Tanggal Masuk</label>
                      <input type="date" class="form-control border-input" name="tanggal_masuk">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Kategori</label>
                      <select class="form-control" name="kategori">
                        <option value="">--Kategori Jenis Bantuan--</option>
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
                        <button type="submit" id="submit" class="btn btn-info btn-fill" >Simpan</button>
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
