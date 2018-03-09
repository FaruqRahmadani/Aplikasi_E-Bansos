@extends('master_public.layout')
@section('title')
  Beranda
@endsection
@section('content')
  <div class="panel panel-container">
    <div class="row">
      <div class="col-md-12">
        <div class="panel panel-default">
          {{-- <div class="panel-heading">
          Data Statistik
        </div> --}}
        <div class="panel-body">
          {{-- isian content --}}
          <div class="row">
            <div class="col-xs-6 col-md-3 col-lg-3 no-padding">
              <div class="panel panel-teal panel-widget border-right">
                <div class="row no-padding"><em class="fa fa-xl fa-copy color-orange"></em>
                  <div class="large">120</div>
                  <div class="text-muted">Proposal Masuk</div>
                </div>
              </div>
            </div>
            <div class="col-xs-6 col-md-3 col-lg-3 no-padding">
              <div class="panel panel-blue panel-widget border-right">
                <div class="row no-padding"><em class="fa fa-xl fa-hourglass-half color-blue"></em>
                  <div class="large">52</div>
                  <div class="text-muted">Sedang Diproses</div>
                </div>
              </div>
            </div>
            <div class="col-xs-6 col-md-3 col-lg-3 no-padding">
              <div class="panel panel-orange panel-widget border-right">
                <div class="row no-padding"><em class="fa fa-xl fa-check-circle color-teal"></em>
                  <div class="large">24</div>
                  <div class="text-muted">Diterima</div>
                </div>
              </div>
            </div>
            <div class="col-xs-6 col-md-3 col-lg-3 no-padding">
              <div class="panel panel-red panel-widget ">
                <div class="row no-padding"><em class="fa fa-xl fa-minus-circle color-primary"></em>
                  <div class="large">25.2k</div>
                  <div class="text-muted">Ditolak</div>
                </div>
              </div>
            </div>
          </div>
          {{-- batas isian content --}}
        </div>
      </div>
      {{-- batas konten pertama --}}
      <div class="panel panel-default">
        <div class="panel-body timeline-container">
          <div class="row">
            <div class="col-md-10 col-md-offset-1">
              <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1868.4070269813985!2d114.83439478877118!3d-3.44152173884752!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2de6810dad25bd57%3A0xf6e94df6af97a793!2sBadan+Pelayanan+Perijinan+Terpadu+Dan+Penanaman+Modal!5e0!3m2!1sid!2sid!4v1516288803390"
              width="100%" height="250px" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
          </div>
        </div>
      </div>
      {{-- batas konten pertama --}}
      <div class="panel panel-default">
        <div class="panel-body timeline-container">
          <div class="row">
            <div class="col-md-10 col-md-offset-1">
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
