@extends('depan.layouts.master')
@section('content')
  <div class="panel panel-container">
    <div class="row">
      <div class="col-md-12">
        <div class="panel panel-default">
          <div class="panel-body">
            <div class="row">
              <div class="col-md-10">
                <form class="form-horizontal" action="{{ Route('Submit-Kontak') }}" method="post">
                  {{csrf_field()}}
                  <fieldset>
                    <div class="form-group">
                      <label class="col-md-3 control-label" for="name">Nama</label>
                      <div class="col-md-9">
                        <input id="name" name="name" type="text" placeholder="Nama Anda" class="form-control">
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-md-3 control-label" for="email">E-mail</label>
                      <div class="col-md-9">
                        <input id="email" name="email" type="text" placeholder="Email Anda" class="form-control">
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-md-3 control-label" for="message">Pesan</label>
                      <div class="col-md-9">
                        <textarea class="form-control" id="message" name="message" placeholder="Tuliskan pesan anda disini..." rows="5"></textarea>
                      </div>
                    </div>

                    <div class="form-group">
                      <div class="col-md-12 widget-right">
                        <button type="submit" class="btn btn-info btn-md pull-right">Kirim</button>
                      </div>
                    </div>
                  </fieldset>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
