<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="{{ asset('/bootstrap/css/bootstrap.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('/frontend/css/main.css') }}">
</head>
<body>
	<div id="header-home">
		<div class="container">
			<div class="top">
				<div class="pull-left">
					<a href="#">Trips</a>
					<a href="#">Blog</a>
				</div>
			
				<div class="pull-right">
					<a href="#">Sign In</a>
					<a href="#"><i class="fa fa-shopping-cart"></i>Cart</a>
				</div>
				<div class="text-center">
					<a href="#"><img src=""></a>
					trip<span>shoes</span>
				</div>
			</div>
		</div>
		</div>
	</div>
	<div id="content">
		<div class="col-lg-12" style="margin:0px 10px 10px 0px ;">
			<img src="{{ asset('frontend/images/Depositphotos_16281435_original.jpg') }}" width="100%" height="100%">
			<div class="col-lg-offset-3 col-lg-6">
				<h5 class="text-center">A few words</h5>
				<h1 class="text-center">About Us</h1>
				<p class="text-center"> TripShoes was founded in 2016 in Melbourne, Australia. Spearheaded by entrepreneurs from Vietnamese Australian backgrounds, TripShoes aims to bring greater empathy, understanding, homour and heart to the travel experience. Feel free to contact us for any questions.</p>
				<div class="text-center"><button class="btn btn-lg btn-default ">Contact Us</button></div>
			</div>
			<div class="col-lg-offset-2 col-lg-8 text-center">
				<img src="{{ asset('frontend/images/Icon15.png') }}">
				<p> The TripShoes team believes that all trips will be better if there were more of the following: more humour, more history, more hope. By incorporating digital technology with persionalisted stories, we aim to bring you all of the above.</p>
			</div>
		</div>
		<div class="col-lg-12">
			
		</div>
	</div>
	<div id="footer">
    	<div class="container">
			<div class="pull-left">
				<a href="#"><img src=""></a>
				trip<span>shoes</span>
			</div>
			<div class="pull-right">
				<ul>
					<li><a href="#"><i class="fa fa-facebook"></i></a></li>
					<li><a href="#"><i class="fa fa-twitter"></i></a></li>
					<li><a href="#"><i class="fa fa-instagram"></i></a></li>
				</ul>
			</div>
			<div class="text-center">
				<ul>
					<li><a href="#">About</a></li>
					<li><a href="#">Contact</a></li>
					<li><a href="#">Support</a></li>
				</ul>
			</div>
		</div>
		<div class="text-center">
			<strong>© 2016 TripShoes Pty Ltd. All rights reserved.
		</div>
    </div>
	<script type="text/javascript" src="{{ asset('/jquery/jquery.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/bootstrap/js/bootstrap.min.js') }}"></script>
</body>
</html>