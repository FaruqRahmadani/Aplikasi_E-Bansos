<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>@yield('title')</title>
	@include('master_public.asset')

</head>
<body>
	{{-- navbar --}}
	@include('master_public.navbar')
	{{-- batas navbar --}}

	{{-- sidebar --}}
	@include('master_public.sidebar')
	{{-- batas sidebar --}}

	{{-- content container custom --}}
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">

		{{-- breadcrumb --}}
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="/">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">@yield('title')</li>
			</ol>
		</div>
		{{-- batas breadcrumb --}}

		{{-- page header --}}
		<div class="row">
			<div class="col-lg-12">
				<h2 class="page-header">@yield('title')</h2>
			</div>
		</div>
		{{-- batas page header --}}

		{{-- Content --}}
		@yield('content')
		{{-- Batas Content --}}

	</div>	<!--/.main-->
</body>
</html>
