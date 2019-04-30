@extends('admin.layouts.master')
@section('content')
  <div class="panel panel-container">
    <div class="row">
      <div class="col-md-12">
        <div class="panel panel-default">
          <div class="panel-heading">
            Data @{{showform}}
          </div>
          <div class="panel-body">
            <form action="{{ Route('Submit-Input-Data') }}"  autocomplete="off" method="POST">
              <form-pemohon
                v-bind:class="{ 'hidden-template': showform != 'Pemohon' }"
                token = {{ csrf_token() }}
                auth = {{ Auth::user()->api_token }}
              ></form-pemohon>
              <form-instansi
                v-bind:class="{ 'hidden-template': showform != 'Instansi' }"
                token = {{ csrf_token() }}
                auth = {{ Auth::user()->api_token }}
              ></form-instansi>
              <form-proposal
                v-bind:class="{ 'hidden-template': showform != 'Proposal' }"
              ></form-proposal>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
