@extends('master_public.layout')
@section('title')
  Kontak
@endsection
@section('content')
  <div class="panel panel-container">
    <div class="row">
      <div class="col-md-12">
        <div class="panel panel-default">
          {{-- <div class="panel-heading">
          Site Traffic Overview
        </div> --}}
        <div class="panel-body">
          {{-- isian content --}}
          <div class="row">
            <div class="col-md-10">
              <form class="form-horizontal" action="" method="post">
                <fieldset>
                  <!-- Name input-->
                  <div class="form-group">
                    <label class="col-md-3 control-label" for="name">Nama</label>
                    <div class="col-md-9">
                      <input id="name" name="name" type="text" placeholder="Nama Anda" class="form-control">
                    </div>
                  </div>

                  <!-- Email input-->
                  <div class="form-group">
                    <label class="col-md-3 control-label" for="email">Enail</label>
                    <div class="col-md-9">
                      <input id="email" name="email" type="text" placeholder="Email Anda" class="form-control">
                    </div>
                  </div>

                  <!-- Message body -->
                  <div class="form-group">
                    <label class="col-md-3 control-label" for="message">Pesan</label>
                    <div class="col-md-9">
                      <textarea class="form-control" id="message" name="message" placeholder="Tuliskan pesan anda disini..." rows="5"></textarea>
                    </div>
                  </div>

                  <!-- Form actions -->
                  <div class="form-group">
                    <div class="col-md-12 widget-right">
                      <button type="submit" class="btn btn-info btn-md pull-right">Kirim</button>
                    </div>
                  </div>
                </fieldset>
              </form>
            </div>
          </div>
          {{-- batas isian content --}}
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
