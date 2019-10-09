<!doctype html>
<html class="no-js" lang="zxx">

<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>ISENCO</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Favicons -->
	<link rel="shortcut icon" href="{{ asset('dist/images/favicon.ico') }}">
	<link rel="apple-touch-icon" href="{{ asset('dist/images/icon.png') }}">

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,400,700" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css?family=Khula:300,400,700" rel="stylesheet">  
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css" integrity="sha256-UzFD2WYH2U1dQpKDjjZK72VtPeWP50NoJjd26rnAdUI=" crossorigin="anonymous" />

	<!-- Stylesheets -->
	<link rel="stylesheet" href="{{ asset('dist/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('dist/css/plugins.css') }}">
	<link rel="stylesheet" href="{{ asset('css/style.css') }}">

	<!-- Cusom css -->
	<link rel="stylesheet" href="{{ asset('dist/css/custom.css') }}">

	<!-- Modernizer js -->
	<script src="{{ asset('dist/js/vendor/modernizr-3.5.0.min.js') }}"></script>
</head>

<body>
	  
	<!-- Add your site or application content here -->
	 

	<!-- Main wrapper -->
	<div class="wrapper" id="wrapper">

		<!-- Header Style 3 -->
        <header class="header header-style-1 transparent-header megamenu-container sticky-header">

            @include('sections.headertop')

            @include('sections.navbar')

        </header>
        <!--// Header Style 3 -->

		

		<!-- Page Content -->
		<main class="page-content">
		
			@yield('content')

		</main>
		<!-- //Page Content -->

        @include('sections.footer')

	</div>
	<!-- //Main wrapper -->

	<!-- JS Files -->
	<script src="{{ asset('dist/js/vendor/jquery-3.2.1.min.js') }}"></script>
	<script src="{{ asset('dist/js/popper.min.js') }}"></script>
	<script src="{{ asset('dist/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('dist/js/plugins.js') }}"></script>
	<script src="{{ asset('dist/js/active.js') }}"></script>
	<script src="{{ asset('dist/js/scripts.js') }}"></script>
</body>

</html>