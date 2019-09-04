<!doctype html>
<html lang="en">

<head>
	@guest
	<title>FrindStake | POS Coffe</title>
	@else
	<title>{{Auth::User()->name}}</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="{{asset('admin/assets/vendor/bootstrap/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('admin/assets/vendor/font-awesome/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{asset('admin/assets/vendor/linearicons/style.css')}}">
	<link rel="stylesheet" href="{{asset('admin/assets/vendor/chartist/css/chartist-custom.css')}}">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="{{asset('admin/assets/css/main.css')}}">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="{{asset('admin/assets/css/demo.css')}}">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="{{asset('admin/assets/img/apple-icon.png')}}">
	<link rel="icon" type="image/png" sizes="96x96" href="{{asset('admin/assets/img/favicon.png')}}">
	<!-- Sweetalert -->
	<link rel="stylesheet" href="{{asset('sweet/cssSweetAlert2.min.css')}}">
	<!-- Chart -->
	<link rel="stylesheet" href="{{asset('chartjs/Chart.min.css')}}">
	<!-- DATEPICKER -->
	<link rel="stylesheet" href="{{asset('datepicker/datepicker.min.css')}}">

	
</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<!-- NAVBAR -->
		@include('layouts._navbar')
		<!-- END NAVBAR -->
		
		<!-- LEFT SIDEBAR -->
		@include('layouts._Sidebar')
		<!-- END LEFT SIDEBAR -->		

		<!-- MAIN -->
		<div class="main">
			@yield('content')
		</div>
		<!-- END MAIN -->

		<!-- FOOTER -->
		@include('layouts._footer')
		<!-- END FOOTER -->
	</div>
	<!-- END WRAPPER -->
	<!-- Javascript -->
	<script src="{{asset('admin/assets/vendor/jquery/jquery.min.js')}}"></script>
	<script src="{{asset('admin/assets/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('admin/assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
	<script src="{{asset('admin/assets/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js')}}"></script>
	<script src="{{asset('admin/assets/vendor/chartist/js/chartist.min.js')}}"></script>
	<script src="{{asset('admin/assets/scripts/klorofil-common.js')}}"></script>


	<!-- Online Script -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<!-- END Online Script -->

	<!-- Sweet Alert -->
	<script src="{{asset('sweet/sweetalert2.min.js')}}"></script>
	<!-- End Sweet Alert -->

	<!-- Vue -->
	<script src="{{asset('vue/vue.js')}}"></script>
	<!-- End Vue -->

	<!-- Axios -->
	<script src="{{asset('axios/axios.min.js')}}"></script>
	<!-- End Axios -->

	<!-- Chart JS -->
	<script src="{{asset('chartjs/Chart.min.js')}}"></script>
	<!-- Chart JS -->

	<!-- DataPicker -->
	<script src="{{asset('datepicker/datepicker.min.js')}}"></script>
	<!-- DataPicker -->
	@yield('js')

</body>

</html>
@endguest