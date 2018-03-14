@extends('admin.layouts.master')
@section('content')
  <div class="panel panel-container">
    <div class="row">
      <div class="col-md-12">
        <div class="panel panel-default">
          <div class="panel-body">
            <div class="col-md-10 col-md-offset-1">
              <form action="{{ Route('Submit-Edit-Data-Pemohon', ['id' => IDCrypt::Encrypt($Pemohon->id)]) }}" method="POST">
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>NIK</label>
                      <input type="text" name="nik" class="form-control border-input" maxlength="16" value="{{$Pemohon->nik}}" autofocus required>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Nama Lengkap</label>
                      <input type="text" class="form-control border-input required" name="nama" value="{{$Pemohon->nama}}" required>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Tempat Lahir</label>
                      <input type="text" class="form-control border-input required" name="tempat_lahir" value="{{$Pemohon->tempat_lahir}}" required>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Tanggal Lahir</label>
                      <input type="date" class="form-control border-input required" name="tanggal_lahir" value="{{$Pemohon->tanggal_lahir}}" required>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Pekerjaan</label>
                      <input type="text" class="form-control border-input required" name="pekerjaan" value="{{$Pemohon->pekerjaan}}" required>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Alamat</label>
                      <textarea rows="3" class="form-control border-input" name="alamat" required>{{$Pemohon->alamat}}</textarea>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>RT</label>
                      <input type="text" class="form-control border-input required" name="rt" value="{{$Pemohon->rt}}" required>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>RW</label>
                      <input type="text" class="form-control border-input required" name="rw" value="{{$Pemohon->rw}}" required>
                    </div>
                  </div>
                </div>
                <field-daerah
                  auth = {{ Auth::user()->api_token }}
                  selectedprovinsi = {{$Pemohon->provinsi_id}}
                  selectedkota = {{$Pemohon->kota_id}}
                  selectedkecamatan = {{$Pemohon->kecamatan_id}}
                  selectedkelurahan = {{$Pemohon->kelurahan_id}}
                ></field-daerah>
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
