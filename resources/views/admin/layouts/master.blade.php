<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>{{RouteHelper::JudulRoute()}}</title>
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
	<div id="app">
		<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span></button>
						<a class="navbar-brand" href="#"><span><img src="{{ asset('assets/images/bjb.png')}}" style="width:22px;" alt="logo"></span> &nbsp; E - Bansos </a>
					</div>
				</div>
			</nav>
			<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
				<div class="profile-sidebar">
					<div class="profile-userpic">
						<img src="{{ asset('assets/images/ava.png')}}" class="img-responsive" alt="">
					</div>
					<div class="profile-usertitle">
						<div class="profile-usertitle-name">Admin</div>
						<div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
					</div>
					<div class="clear"></div>
				</div>
				<div class="divider"></div>
				<ul class="nav menu">
					<li {{RouteHelper::ActiveRoute('Beranda')}}>
						<a href="{{ Route('Beranda') }}"><em class="fa fa-home">&nbsp;</em> Beranda</a></li>
					<li {{RouteHelper::ActiveRoute('Input-Data')}}>
						<a href="{{ Route('Input-Data') }}"><em class="fa fa-pencil-square-o">&nbsp;</em> Input Data</a>
					</li>
					<li {{RouteHelper::ActiveRoute('Data-Pemohon')}}>
						<a href="{{ Route('Data-Pemohon') }}"><em class="fa fa-list">&nbsp;</em> Daftar Pemohon</a>
					</li>
					<li {{RouteHelper::ActiveRoute('Data-Instansi')}}>
						<a href="{{ Route('Data-Instansi') }}"><em class="fa fa-list">&nbsp;</em> Daftar Instansi</a>
					</li>
					<li {{RouteHelper::ActiveRoute('Data-Proposal')}}>
						<a href="{{ Route('Data-Proposal') }}"><em class="fa fa-list">&nbsp;</em> Daftar Proposal</a>
					</li>
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
						<li><a class="" href="/admin/daftar_kecamatan">
							<span class="fa fa-arrow-right">&nbsp;</span> Data Kecamatan
						</a></li>
						<li><a class="" href="/admin/daftar_kelurahan">
							<span class="fa fa-arrow-right">&nbsp;</span> Data Kelurahan
						</a></li>
					</ul>
				</li>
				<br>
				<br>
				<div class="divider"></div>
				<li><logout></logout></li>
			</ul>
		</div>
		<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
			<div class="row">
				<ol class="breadcrumb">
					<li><a href="/admin">
						<em class="fa fa-home"></em>
					</a></li>
					<li class="active">{{RouteHelper::JudulRoute()}}</li>
				</ol>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<h2 class="page-header">{{RouteHelper::JudulRoute()}}</h2>
				</div>
			</div>
			@yield('content')
		</div>
	</div>
	<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
