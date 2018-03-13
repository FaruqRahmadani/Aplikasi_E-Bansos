@extends('admin.layouts.master')
@section('title')
  Beranda
@endsection
@section('content')
  <div class="panel panel-container">
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
  </div>
@endsection
