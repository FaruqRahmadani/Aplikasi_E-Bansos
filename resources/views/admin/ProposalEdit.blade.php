@extends('admin.layouts.master')
@section('content')
  <div class="panel panel-container">
    <div class="row">
      <div class="col-md-12">
        <div class="panel panel-default">
          <div class="panel-body">
            <div class="col-md-10 col-md-offset-1">
              <form action="{{ Route('Submit-Edit-Data-Proposal', ['id' => IDCrypt::Encrypt($Proposal->id)]) }}" method="POST">
                {{csrf_field()}}
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="">Nomor Proposal</label>
                      <input type="text" class="form-control border-input" name="nomor_proposal" value="{{$Proposal->nomor}}" required>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="">Tanggal Proposal</label>
                      <input type="date" class="form-control border-input" name="tanggal_proposal" value="{{$Proposal->tanggal_proposal}}" required>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Perihal</label>
                      <textarea rows="3" class="form-control border-input" name="perihal_proposal" required>{{$Proposal->perihal}}</textarea>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Kelengkapan Berkas </label>
                      <div class="radio">
                        <label>
                          <input type="radio" name="kelengkapan_proposal" value="Lengkap" {{$Proposal->kelengkapan == "Lengkap" ? 'checked' : ''}} required>Lengkap
                        </label>
                        <label>
                          <input type="radio" name="kelengkapan_proposal" value="Belum Lengkap" {{$Proposal->kelengkapan != "Lengkap" ? 'checked' : ''}} required>Belum Lengkap
                        </label>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="">Tanggal Masuk</label>
                      <input type="date" class="form-control border-input" name="tanggalmasuk_proposal" value="{{$Proposal->tanggal_masuk}}" required>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Kategori</label>
                      <select class="form-control" name="kategori_proposal" required>
                        <option value="K1" {{$Proposal->kategori == "K1" ? 'selected' : ''}}>K1</option>
                        <option value="K2" {{$Proposal->kategori == "K2" ? 'selected' : ''}} >K2</option>
                        <option value="K3" {{$Proposal->kategori == "K3" ? 'selected' : ''}} >K3</option>
                        <option value="K4" {{$Proposal->kategori == "K4" ? 'selected' : ''}} >K4</option>
                        <option value="K5" {{$Proposal->kategori == "K5" ? 'selected' : ''}} >K5</option>
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
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
