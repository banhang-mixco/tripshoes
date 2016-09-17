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
		<div class="col-lg-offset-1 col-lg-10">
			<div class="panel panel-default">
			    <div class="panel-heading" align="left"><i class="fa fa-angle-left"></i> Back to Trips</div>
			    <div class="panel-body">
			    	<div class="col-lg-12">
			    		<div class="col-lg-5">
				    		<h3 class="text-center">BICYCLE EXPERIENCE</h3>
				    		<h1>Thao Nguyen's</h1>
				    		<h1>Countryside Bicycle Trip</h1>
				    		<p>A bicycle experience taking you into the heart of Hoi An, throught the eyes of a farmer from the countryside. </p>
				    		<ul>
								<li><a href="#">About</a></li>
								<li><a href="#">Your Host</a></li>
								<li><a href="#">Reviews</a></li>
								<li><a href="#" class="active">Starting Location</a></li>
							</ul>
							<br>
							<div class="col-lg-12">
								<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d61349.673926932104!2d108.1712138150428!3d16.04707740690313!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314219c792252a13%3A0xfc14e3a044436487!2sDa+Nang%2C+H%E1%BA%A3i+Ch%C3%A2u+District%2C+Da+Nang%2C+Vietnam!5e0!3m2!1sen!2s!4v1474128106688" width="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
							</div>
							<div class="col-lg-12">
								<h3>Vy's Market Restaurant and Cooking School</h3>
								<p>3 Nguyen Hoang, Hoi An, Minh An, Viet Nam</p>
							</div>
				    	</div>
				    	<div class="col-lg-7">
				    		<div class="col-lg-9">
				    			<img src="{{ asset('frontend/images/Depositphotos_12619090_original.jpg') }}" width="100%">
				    		</div>
				    		<div class="col-lg-3">
				    			<img src="{{ asset('frontend/images/Depositphotos_43226125_original.jpg') }}" width="100%">
				    			<img src="{{ asset('frontend/images/Depositphotos_23980403_original.jpg') }}" width="100%">
				    			<img src="{{ asset('frontend/images/Depositphotos_90286486_original.jpg') }}" width="100%">
				    			<img src="{{ asset('frontend/images/Depositphotos_6783329_original.jpg') }}" width="100%">
				    		</div>
				    	</div>
			    	</div>
			    	<div class="col-lg-12">
			    		<div class="col-lg-3">
			    			<select class="form-control" id="sel1">
							    <option>Select Date</option>
							</select>
			    		</div>
			    		<div class="col-lg-3">
			    			<select class="form-control" id="sel1">
							    <option>Select Time</option>
							</select>
			    		</div>
			    		<div class="col-lg-3">
			    			<select class="form-control" id="sel1">
							    <option>Select No of Tickets</option>
							</select>
			    		</div>
			    		<div class="col-lg-3">
			    			<select class="form-control" id="sel1">
							    <option>Select Type</option>
							</select>
			    		</div>
			    	</div>
			    	<div class="col-lg-12">
			    		<p>$19.00</p>
			    	</div>
			    	<div class="col-lg-12">
			    		<button class="btn btn-lg btn-success">Add to card</button>
			    		<button class="btn btn-lg btn-default">Add promo code</button>
			    	</div>
			    </div>
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