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
			<div class="container">
				<div class="col-lg-offset-3 col-lg-6">
					<div class="form-group">
						<h3 class="text-left">Traveller Number1<img src="{{ asset('frontend/images/Icon20.png') }}" class="text-right img-rounded"></h3>
						
					</div>
					<form>
						<div class="form-group">
							<label >E-mali</label>
							<input type="emai" name="emai" class="form-control">
						</div>
						<div class="col-lg-12">
							<div class="col-lg-6">
								<div class="form-group">
									<label> First name</label>
									<input type="text" name="first_name" class="form-control">
								</div>
							</div>
							<div class="col-lg-6">
								<div class="form-group">
									<label> Last name</label>
									<input type="text" name="last_name" class="form-control">
								</div>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="col-lg-6">
								<div class="form-group">
									<label> Country of Residence</label>
									<input type="text" name="country_of_residence" class="form-control">
								</div>
							</div>
							<div class="col-lg-6">
								<div class="form-group">
									<label> Age</label>
									<input type="text" name="age" class="form-control">
								</div>
							</div>
						</div>
						<div class="col-lg-12">
							<button class="btn btn-lg-4 btn-default">Add Traveller</button>
							<button class="btn btn-lg-8 btn-default">Continue to Payment <i class="fa fa-arrow-right"></i></button>
						</div>
					</form>
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