<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>E-BANSOS | Kota Banjarbaru</title>
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
	<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="/"><span><img src="{{ URL::asset('assets/images/bjb.png')}}" style="width:22px;" alt="logo"></span> &nbsp; E - Bansos </a>
			</div>
		</div>
	</nav>
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<ul class="nav menu">
			<li class="">
				<a href="{{ Route('Home') }}"><em class="fa fa-home">&nbsp;</em> Home</a>
			</li>
			<li>
				<a href="/persyaratan"><em class="fa fa-copy">&nbsp;</em> Daftar Persyaratan</a>
			</li>
			<li>
				<a href="/daftar_proposal"><em class="fa fa-list">&nbsp;</em> Daftar Proposal</a>
			</li>
			<li>
				<a href="/kontak"><em class="fa fa-paper-plane">&nbsp;</em> Kontak</a>
			</li>
		</ul>
	</div>
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="/">
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
		<div id="app">
			@yield('content')
		</div>
	</div>
</body>
<script src="{{ asset('js/app.js') }}"></script>
</html>
