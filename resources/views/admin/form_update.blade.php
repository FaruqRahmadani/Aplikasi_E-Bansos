@extends('master_admin.layout')
@section('title')
  Data
@endsection
@section('content')
  <div class="panel panel-container">
    <div class="row">
      <div class="col-md-12">
        <div class="panel panel-default">
          <div class="panel-heading">
            Update Proposal
          </div>
          <div class="panel-body">
            {{-- isian content --}}
            <div class="col-md-10 col-md-offset-1">
              <form action="/admin/form_page2" method="">
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="">Tanggal</label>
                      <input type="date" class="form-control border-input" name="tanggal">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Tujuan</label>
                      <input type="text" class="form-control border-input required" maxlength="50" name="tujuan" id="tujuan" value="" placeholder="Tujuan surat">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Nomor</label>
                      <input type="text" class="form-control border-input required" maxlength="50" name="nomor" id="nomor" value="" placeholder="Nomor Surat">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Perihal</label>
                      <textarea rows="3" class="form-control border-input" maxlength="" placeholder="Perihal terkait" name="" id=""></textarea>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Staus</label>
                      <select class="form-control" name="status">
                        <option value="">Sedang Diproses</option>
                        <option value="">Ditolak</option>
                        <option value="">Diterima</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Keterangan</label>
                      <textarea rows="3" class="form-control border-input" maxlength="" placeholder="Keterangan ataupun penjelasan terkait lainnya" name="Keterangan" id="Keterangan"></textarea>
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
