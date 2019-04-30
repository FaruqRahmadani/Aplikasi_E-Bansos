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
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3982.6344671960283!2d114.82880731493961!3d-3.438784642731773!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2de6817491bf1bfd%3A0x598d17189e3fd73d!2sPemerintah+Kota+Banjarbaru+Balaikota!5e0!3m2!1sid!2sid!4v1523497273926"
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
                Jl. Panglima Batur Timur No.1, Kel. Loktabat Utara, Kec. Banjar Baru Utara, Kota Banjar Baru, Kalimantan Selatan  
                <br>
                70711 &nbsp; <i class="fa fa-envelope"></i>
                <br>
                0511 4772569 &nbsp; <i class="fa fa-phone"></i> 
                <br>
                (FAX) 0511 4774269 &nbsp; <i class="fa fa-fax"></i>
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
