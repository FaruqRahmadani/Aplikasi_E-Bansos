@extends('master_public.layout')
@section('title')
  Persyaratan dan Alur Pengajuan
@endsection
@section('content')
  <div class="panel panel-container">
    <div class="row">
      <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
          <div class="panel-heading">
            Daftar Persyaratan
          </div>
          <div class="panel-body">
            {{-- isian content --}}
            <ol>
              <li>Fotocopy KTP</li>
              <li>Fotocopy KTP</li>
              <li>Fotocopy KTP</li>
              <li>Fotocopy KTP</li>
              <li>Fotocopy KTP</li>
              <li>Fotocopy KTP</li>
            </ol>
            {{-- batas isian content --}}
          </div>
        </div>
        {{-- batas konten pertama --}}
        <div class="panel panel-default">
          <div class="panel-heading">
            Alur Pengajuan
          </div>
          <div class="panel-body timeline-container">
            <ul class="timeline">
              <li>
                <div class="timeline-badge"><i class="glyphicon glyphicon-pushpin"></i></div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4 class="timeline-title">Lorem ipsum dolor sit amet</h4>
                  </div>
                  <div class="timeline-body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer at sodales nisl. Donec malesuada orci ornare risus finibus feugiat.</p>
                  </div>
                </div>
              </li>
              <li>
                <div class="timeline-badge primary"><i class="glyphicon glyphicon-link"></i></div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4 class="timeline-title">Lorem ipsum dolor sit amet</h4>
                  </div>
                  <div class="timeline-body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                  </div>
                </div>
              </li>
              <li>
                <div class="timeline-badge"><i class="glyphicon glyphicon-camera"></i></div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4 class="timeline-title">Lorem ipsum dolor sit amet</h4>
                  </div>
                  <div class="timeline-body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer at sodales nisl. Donec malesuada orci ornare risus finibus feugiat.</p>
                  </div>
                </div>
              </li>
              <li>
                <div class="timeline-badge"><i class="glyphicon glyphicon-paperclip"></i></div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4 class="timeline-title">Lorem ipsum dolor sit amet</h4>
                  </div>
                  <div class="timeline-body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
