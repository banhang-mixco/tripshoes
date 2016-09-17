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
		<div class="col-lg-12" style="margin-top:50px;">
			<div class="col-lg-12 text-center" style="margin-bottom:50px;"><h1>My Bookings</h1></div>
			<div class="col-lg-offset-1 col-lg-5">
				<img src="{{ asset('frontend/images/Depositphotos_12619090_original.jpg') }}" class="img-rounded" width="100%" height="100%">
				<h1 class="text-center"> Thao Nguyen's</h1>
				<h1 class="text-center"> Countryside Bicycle Trip</h1>
				<p class="text-center">$19.00| 120mins | Bicycle Experience</p>
			</div>
			<div class="col-lg-5">
				<img src="{{ asset('frontend/images/Depositphotos_85776940_original.jpg') }}" class="img-rounded" width="100%" height="100%">
				<h1 class="text-center"> Uncle Vu's City</h1>
				<h1 class="text-center"> Walking Adventure</h1>
				<p class="text-center">$19.00| 120mins | Walking Experience</p>
			</div>
		</div>
		<div class="col-lg-12" style="margin-top:50px;">
			<div class="col-lg-12 text-center" style="margin-bottom:50px;"><h1>Past Bookings</h1></div>
			<div class="col-lg-offset-1 col-lg-5">
				<img src="{{ asset('frontend/images/Depositphotos_70198701_original.jpg') }}" class="img-rounded" width="100%" height="100%">
				<h1 class="text-center"> Joe's Best of Hoi An</h1>
				<h1 class="text-center"> Bar Hop</h1>
				<p class="text-center">$19.00| 120mins | Walking Experience</p>
			</div>
			<div class="col-lg-5">
				<img src="{{ asset('frontend/images/Depositphotos_81744730_original.jpg') }}" class="img-rounded" width="100%" height="100%">
				<h1 class="text-center"> Tram Anh's Iphone</h1>
				<h1 class="text-center"> Photography Adventure</h1>
				<p class="text-center">$19.00| 120mins | Walking Experience</p>
			</div>
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