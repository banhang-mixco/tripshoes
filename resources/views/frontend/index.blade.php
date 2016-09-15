<!DOCTYPE html>
<html>
	<head>
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

				<div id="banner-header">
					<h4>Daily Guided Trips in Hoi An</h4>
					<h1>Take a trip in someone else's shoes</h1>
					<a href="#" class="btn btn-lg btn-success">Get early access</a>
				</div>
			</div>
		</div>


		<div id="content">
			<div class="trip">
				<h1 class="text-center">Every trips designed by someon</h1>
			</div>
			<!-- Begin A new form of giving -->
			<div class="col-lg-12 ">
				<div class="col-lg-offset-1 col-lg-5">
					<h1 class="text-center"> A new form of giving</h1>
					<p class="text-center"> Every booking undertaken on TripShoes sees a donation made to assist the under privileged living in Vietnam. TripShoes is associated with a host of charities and education centres across Vietnam an Australia and you'll be pleased to know you'll be "giving with every foottep indertaken on each trip."</p>
				</div>
			</div>
			<!-- End giving -->

			<!-- How to book -->
			<div class="col-lg-12">
				<h4 class="text-center">How to Book</h4>
				<h1 class="text-center"> Booking is as easy as 1,2,3</h1>
				<div class="col-lg-12">
					<div class="col-lg-4 text-center">
						<img src="{{ asset('frontend/images/noun_464.png') }}">
						<h3 class="text-center"> Download the TripShoes app</h3>
						<p class="text-center"> TripShoes is currently only available on iphone. Simply download the secure TripShoes app onto your iphone on the App Store</p>
					</div>
					<div class="col-lg-4 text-center">
						<img src="{{ asset('frontend/images/noun_579236.png') }}">
						<h3 class="text-center"> Book a trip in-app or on the website</h3>
						<p class="text-center"> Payments can be made via Paypal or credit card. All trips offer incredible value.</p>
					</div>
					<div class="col-lg-4 text-center">
						<img src="{{ asset('frontend/images/noun_532311.png') }}">
						<h3 class="text-center"> Meet at the Starting Location</h3>
						<p class="text-center"> Arrive ad your starting locaition 5 minutes before your trip begins, log into your app, tap on Tour Mode and you're all ser. TripShoes will handle the rest.</p>
					</div>
				</div>
			</div>
			<!-- End how to book -->

			<!-- Begin Launch -->
			<div class="col-lg-12">
				<div class="col-lg-offset-1 col-lg-10">
					<h3 class="text-center"> Launch</h3>
					<h1 class="text-center"> Soft launch in Hoi An October 2016</h1>
					<p class="text-center">TripShoes is soft launching in Hoi An in October 2016. If you're in Hoi An in late 2016, registe now for ealy access and be amongst the first to experience one of our unique trips. Trips in this period will be heavily discounted so register quickly for early access trips.</p>
				</div>
			</div>
			<div class="col-lg-12 text-center">
		       	<h1 class="text-center">Get early access</h1>
		        <div class="col-lg-12">
		            <div class="col-lg-offset-2 col-lg-8 text-center">
		                <form class="form-inline">
		                    <div class="form-group col-lg-12">
		                    	<div class="col-lg-4">
		                        	<input type="text" name="youname" class="form-control" placeholder="Youname">
	                        	</div>
	                        	<div class="col-lg-4">
		                        	<input type="email" class="form-control" name="email" placeholder="E-mail">
	                        	</div>                           
		                    </div>
		                    <div class="form-group col-lg-12">
		                    	<div class="col-lg-4">
			                        <select class="form-control">
			                            <option>When will you being Hoi An?	</option>
			                        </select>
		                        </div>
		                        <div class="col-lg-4">
		                        	<input type="text" name="country" class="form-control" placeholder="Which country are you from?">
	                        	</div>
		                    </div>
		                    <div class="col-lg-12">
		                        <select class="form-control">
		                            <option>Which trip are you most intered in?</option>
		                        </select>
		                    </div>
		                    <button class="btn btn-lg btn-success col-lg-12">Get me early access</button>
		                </form>
		            </div>
		        </div>
		    </div>
	    </div>

	    <div id="footer">
	    	
	    </div>
			
		<script type="text/javascript" src="{{ asset('/jquery/jquery.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('/bootstrap/js/bootstrap.min.js') }}"></script>
	</body>
</html>