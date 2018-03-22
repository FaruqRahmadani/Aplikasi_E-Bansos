@extends('admin.layouts.master')
@section('content')
  <div class="panel panel-container">
    <div class="row">
      <div class="col-md-12">
        <div class="panel panel-default">
          <div class="panel-body">
            <div class="col-md-10 col-md-offset-1">
              <form action="{{ Route('Submit-Tambah-Data-Kota') }}" method="POST">
                {{csrf_field()}}
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Provinsi</label>
                      <select class="form-control border-input" name="provinsi_id" required autofocus>
                        @foreach ($Provinsi as $DataProvinsi)
                          <option value="" selected hidden>Provinsi</option>
                          <option value="{{$DataProvinsi->id}}">{{$DataProvinsi->nama_provinsi}}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Nama Kota</label>
                      <input type="text" name="nama_kota" class="form-control border-input" required>
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
