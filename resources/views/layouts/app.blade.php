<!doctype html>
<html class="fixed">

<head>
	<meta charset="UTF-8">

	<title>My ERP</title>
	<meta name="keywords" content="HTML5 Admin Template" />
	<meta name="description" content="Porto Admin - Responsive HTML5 Template">
	<meta name="author" content="okler.net">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">


	<link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap/css/bootstrap.css') }}" />
	<link rel="stylesheet" href="{{ asset('assets/vendor/font-awesome/css/font-awesome.css') }}" />
	<link rel="stylesheet" href="{{ asset('assets/vendor/magnific-popup/magnific-popup.css') }}" />
	<!-- <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap-datepicker/css/datepicker3.css') }}" /> -->

	<link rel="stylesheet" href="{{ asset('assets/stylesheets/theme.css') }}" />
	<link rel="stylesheet" href="{{ asset('assets/stylesheets/skins/default.css') }}" />
	<link rel="stylesheet" href="{{ asset('assets/stylesheets/theme-custom.css') }}">
	<script src="{{ asset('assets/vendor/modernizr/modernizr.js') }}"></script>

	<script src="{{ asset('js/jquery-3.5.0.min.js') }}"></script>
	<script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.js') }}"></script>

	


	@yield('styles')


</head>

<body>




	<section class="body">

		@include('layouts.partials.header')

		<!-- <div class="inner-wrapper"> -->

		</br></br></br>


		@include('layouts.partials.leftsidebar')

		<section role="main" class="content-body">
			@include('layouts.partials.breadcrumb')

			@yield('content')


		</section>
		<!-- </div> -->

	</section>



	<script src="{{ asset('assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js') }}"></script>

	<script src="{{ asset('assets/vendor/nanoscroller/nanoscroller.js') }}"></script>
	<!-- <script src="{{ asset('assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js') }}"></script> -->

	<script src="{{ asset('assets/vendor/magnific-popup/magnific-popup.js') }}"></script>
	<script src="{{ asset('assets/vendor/jquery-placeholder/jquery.placeholder.js') }}"></script>

	<!-- Theme Base, Components and Settings -->
	<script src="{{ asset('assets/javascripts/theme.js') }}"></script>

	<!-- Theme Custom -->
	<script src="{{ asset('assets/javascripts/theme.custom.js') }}"></script>

	<!-- Theme Initialization Files -->
	<!-- <script src="{{ asset('assets/javascripts/theme.init.js') }}"></script> -->

	@yield('scripts')
</body>

</html>