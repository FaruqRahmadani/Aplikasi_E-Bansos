@extends('admin.layouts.master')
@section('content')
  <div class="panel panel-container">
    <div class="row">
      <div class="col-md-12">
        <div class="panel panel-default">
          <div class="panel-body">
            <div class="col-md-10 col-md-offset-1">
              <form action="{{ Route('Submit-Edit-Data-Kecamatan', ['id' => IDCrypt::Encrypt($Kecamatan->id)]) }}" method="POST">
                {{csrf_field()}}
                <field-daerah-provkota
                  auth = {{Auth::user()->api_token}}
                  selectedprovinsi = {{$Kecamatan->Kota->Provinsi->id}}
                  selectedkota = {{$Kecamatan->Kota->id}}
                ></field-daerah-provkota>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Nama Kecamatan</label>
                      <input type="text" name="nama_kecamatan" class="form-control border-input" value="{{$Kecamatan->nama_kecamatan}}" autofocus required>
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
