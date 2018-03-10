<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Loading</title>
	<link href="{{ URL::asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
	<link href="{{ URL::asset('assets/css/styles.css')}}" rel="stylesheet">

	{{-- css loader progress --}}
	<style>
	.loader {
		margin: 0 auto;
		border: 16px solid #f3f3f3;
		border-radius: 50%;
		border-top: 16px solid black;
		border-bottom: 16px solid black;
		width: 120px;
		height: 120px;
		-webkit-animation: spin 2s linear infinite;
		animation: spin 2s linear infinite;
	}

	@-webkit-keyframes spin {
		0% { -webkit-transform: rotate(0deg); }
		100% { -webkit-transform: rotate(360deg); }
	}

	@keyframes spin {
		0% { transform: rotate(0deg); }
		100% { transform: rotate(360deg); }
	}
</style>
{{--  batas css loader progress --}}

</head>
<body>
	<div class="row">
		<div class="col-md-12">
			{{-- content loader --}}
			<div style="padding-top:15%">
				<div class="loader"></div>
			</div>
			{{-- batas content loader --}}
		</div><!-- /.col-->
	</div><!-- /.row -->


	<script src="{{ URL::asset('assets/js/jquery-1.11.1.min.js')}}"></script>
	<script src="{{ URL::asset('assets/js/bootstrap.min.js')}}"></script>
</body>
</html>
