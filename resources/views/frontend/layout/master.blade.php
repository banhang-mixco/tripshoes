<!DOCTYPE html>
<html>
	<head>
		<title> Tripshoes @yield('title')</title>
		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="{{ asset('/bootstrap/css/bootstrap.min.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('/frontend/css/main.css') }}">
		@yield('header')
	</head>
	<body>
		
		@include('frontend.includes.header')
		<div class="clearfix"></div>
		<div id="content">
			@yield('content')
		</div>
		@include('frontend.includes.footer')
			
		<script type="text/javascript" src="{{ asset('/jquery/jquery.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('/bootstrap/js/bootstrap.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('/frontend/js/custom.js') }}"></script>
		@yield('script')
	</body>
</html>