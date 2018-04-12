@extends('depan.layouts.master')
@section('content')
  <div class="panel panel-container">
    <div class="row">
      <div class="col-md-12">
        <div class="panel panel-default">
        <div class="panel-body">
          <div class="row">
            <div class="col-xs-6 col-md-3 col-lg-3 no-padding">
              <div class="panel panel-teal panel-widget border-right">
                <div class="row no-padding"><em class="fa fa-xl fa-copy color-orange"></em>
                  <div class="large">{{Proposal::CountProposal($Proposal)}}</div>
                  <div class="text-muted">Proposal Masuk</div>
                </div>
              </div>
            </div>
            <div class="col-xs-6 col-md-3 col-lg-3 no-padding">
              <div class="panel panel-blue panel-widget border-right">
                <div class="row no-padding"><em class="fa fa-xl fa-hourglass-half color-blue"></em>
                  <div class="large">{{Proposal::CountProposalProses($Proposal)}}</div>
                  <div class="text-muted">Sedang Diproses</div>
                </div>
              </div>
            </div>
            <div class="col-xs-6 col-md-3 col-lg-3 no-padding">
              <div class="panel panel-orange panel-widget border-right">
                <div class="row no-padding"><em class="fa fa-xl fa-check-circle color-teal"></em>
                  <div class="large">{{Proposal::CountProposalDiterima($Proposal)}}</div>
                  <div class="text-muted">Diterima</div>
                </div>
              </div>
            </div>
            <div class="col-xs-6 col-md-3 col-lg-3 no-padding">
              <div class="panel panel-red panel-widget ">
                <div class="row no-padding"><em class="fa fa-xl fa-minus-circle color-primary"></em>
                  <div class="large">{{Proposal::CountProposalDitolak($Proposal)}}</div>
                  <div class="text-muted">Ditolak</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
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
              <p class="text-right">
                <b>SUB. BAGIAN FASILITASI BANTUAN SOSIAL BAGIAN KESEJAHTERAAN RAKYAT
                <br>
                SEKRETARIAT KOTA BANJARBARU</b>
                <br>
                <br>
                Jl. Lorem ipsum dolor sit amet, Kel. Komet, Kec. Banjarbaru Utara - Kota Banjarbaru 
                <br>
                99999999999 &nbsp; <i class="fa fa-phone"></i> 
                <br>
                99999999999 &nbsp; <i class="fa fa-fax"></i>
                <br> 
                <br>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
