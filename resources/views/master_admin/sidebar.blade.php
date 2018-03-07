<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
  <div class="profile-sidebar">
    <div class="profile-userpic">
      <img src="{{ URL::asset('assets/images/ava.png')}}" class="img-responsive" alt="">
    </div>
    <div class="profile-usertitle">
      <div class="profile-usertitle-name">Admin</div>
      <div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
    </div>
    <div class="clear"></div>
  </div>
  <div class="divider"></div>
  <ul class="nav menu">
    <li class=""><a href="/admin"><em class="fa fa-home">&nbsp;</em> Beranda</a></li>
    <li><a href="/admin/input_data"><em class="fa fa-pencil-square-o">&nbsp;</em> Input Data</a></li>
    <li><a href="/admin/daftar_pemohon"><em class="fa fa-list">&nbsp;</em> Daftar Pemohon</a></li>
    <li><a href="/admin/daftar_proposal"><em class="fa fa-list">&nbsp;</em> Daftar Proposal</a></li>
    <li class="parent "><a data-toggle="collapse" href="#sub-item-1">
      <em class="fa  fa-globe">&nbsp;</em> Daftar daerah <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="fa fa-plus"></em></span>
      </a>
      <ul class="children collapse" id="sub-item-1">
        <li><a class="" href="/admin/daftar_provinsi">
          <span class="fa fa-arrow-right">&nbsp;</span> Data Provinsi
        </a></li>
        <li><a class="" href="/admin/daftar_kota">
          <span class="fa fa-arrow-right">&nbsp;</span> Data Kab/Kota
        </a></li>
        <li><a class="" href="/admin/daftar_kelurahan">
          <span class="fa fa-arrow-right">&nbsp;</span> Data Kelurahan
        </a></li>
      </ul>
    </li>
    <br>
    <br>
    <div class="divider"></div>
    <li><a href="/login"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
  </ul>
</div>
