<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="author" content="OnWave">
		<meta name="description" content="@yield('metadescription')">
		<meta name="keywords" content="@yield('keywords')">

		<!-- favicon -->
		<link rel="shortcut icon" href="assets/images/favicon.png">
		<link rel="apple-touch-icon" href="assets/images/apple-touch-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="72x72" href="assets/images/apple-touch-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="114x114" href="assets/images/apple-touch-icon-114x114.png">

		<title>ONWAVE</title>

		<!-- fonts -->
		<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

		<!-- styles -->
		<link href="{{asset('assets/css/plugins.css')}}" rel="stylesheet" type="text/css">
		<link href="{{asset('assets/css/style.css')}}" rel="stylesheet" type="text/css">
	</head>
	<body class="preloader cursor-anim-enable dark-nav">
		<!-- preloader-loading start -->
		<div class="preloader__logoload-box">
			<img class="preloader__logo" src="assets/images/logo/logo-white.png" alt="logo">
			<div class="preloader__pulse"></div>
		</div><!-- preloader-loading end -->

		<!-- pointer start -->
		<div class="pointer js-pointer" id="js-pointer">
			<i class="pointer__inner fas fa-long-arrow-alt-right"></i>
			<i class="pointer__inner fas fa-search"></i>
			<i class="pointer__inner fas fa-link"></i>
        </div>
        <!-- pointer end -->

		<!-- to top btn start -->
		<a href="#up" class="scroll-to-btn js-headroom js-midnight-color js-smooth-scroll js-pointer-large">
			<span class="scroll-to-btn__box">
				<span class="scroll-to-btn__arrow"></span>
			</span>
		</a><!-- to top btn end -->

		<!-- scroll down btn start -->
		<a href="#down" class="scroll-to-btn to-down js-headroom js-midnight-color js-smooth-scroll js-pointer-large js-scroll-btn">
			<span class="scroll-to-btn__box">
				<span class="scroll-to-btn__arrow"></span>
			</span>
		</a><!-- scroll down btn end -->

		<!-- header start -->
		@include('layout.header')
        <!-- header end -->

		<!-- navigation start -->
		@include('layout.nav')
        <!-- navigation end -->

		<!-- main start -->

			@yield('content')

        <!-- main end -->

		<!-- footer start -->
		@include('layout.footer')
        <!-- footer end -->

		<!-- scripts -->
		<script src="{{url('/assets/js/plugins.js')}}"></script>
		<script src="assets/js/footer-reveal.js"></script>
		<script src="assets/js/main.js"></script>
        <script src="assets/js/footer-reveal_init.js"></script>
        @stack('script')
	</body>
</html>
