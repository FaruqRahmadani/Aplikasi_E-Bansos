@extends('admin.layouts.master')
@section('content')
  <div class="panel panel-container">
    <div class="row">
      <div class="col-md-12">
        <div class="panel panel-default">
          <div class="panel-heading">
            Data Instansi
          </div>
          <div class="panel-body">
            <div class="col-md-10 col-md-offset-1">
              <form action="{{ route('Submit-Edit-Data-Instansi', ['Id' => IDCrypt::Encrypt($Instansi->id)]) }}" method="POST">
                {{csrf_field()}}
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Nama Instansi</label>
                      <input type="text" class="form-control border-input" maxlength="100" name="nama" value="{{$Instansi->nama}}">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Alamat Instansi</label>
                      <textarea rows="5" class="form-control border-input" maxlength="100" name="alamat">{{$Instansi->alamat}}</textarea>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>RT</label>
                      <input type="text" class="form-control border-input" maxlength="3" name="rt" value="{{$Instansi->rt}}">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>RW</label>
                      <input type="text" class="form-control border-input" maxlength="3" name="rw" value="{{$Instansi->rw}}">
                    </div>
                  </div>
                </div>
                <field-daerahkeckel
                  auth = {{Auth::user()->api_token}}
                  selectedkecamatan = {{$Instansi->kecamatan_id}}
                  selectedkelurahan = {{$Instansi->kelurahan_id}}
                ></field-daerahkeckel>
                <br>
                <div class="row">
                  <div class="col-md-12">
                    <div class="text-center">
                      <div class="pull-right" >
                        <button type="submit" class="btn btn-info btn-fill">Simpan</button>
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
