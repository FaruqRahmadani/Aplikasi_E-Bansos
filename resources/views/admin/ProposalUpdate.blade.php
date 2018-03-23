@extends('admin.layouts.master')
@section('content')
  <div class="panel panel-container">
    <div class="row">
      <div class="col-md-12">
        <div class="panel panel-default">
          <div class="panel-heading">
            Update Proposal
          </div>
          <div class="panel-body">
            <div class="col-md-10 col-md-offset-1">
              <form action="{{ route('Submit-Update-Data-Proposal', ['id' => $Id]) }}" method="POST">
                {{csrf_field()}}
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Tujuan</label>
                      <input type="text" class="form-control border-input required" name="tujuan" placeholder="Tujuan surat">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Nomor Surat</label>
                      <input type="text" class="form-control border-input required" name="nomor_surat" placeholder="Nomor Surat">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Perihal</label>
                      <textarea rows="3" class="form-control border-input" placeholder="Perihal terkait" name="perihal"></textarea>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Status</label>
                      <select class="form-control" name="status">
                        <option value="0">Sedang Diproses</option>
                        <option value="1">Diterima</option>
                        <option value="2">Ditolak</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Keterangan</label>
                      <textarea rows="3" class="form-control border-input" placeholder="Keterangan ataupun penjelasan terkait lainnya" name="keterangan"></textarea>
                    </div>
                  </div>
                </div>
                <br>
                <div class="row">
                  <div class="col-md-12">
                    <div class="text-center">
                      <div class="pull-right" >
                        <button type="reset" class="btn btn-warning btn-fill" >Ulang</button>
                        <button type="submit" class="btn btn-info btn-fill" >Simpan</button>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
