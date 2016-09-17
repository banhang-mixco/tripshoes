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
					<form>
						<div class="form-group">
							<h3 class="text-left">Choose your payment method</h3>						
						</div>
						<div class="form-group">
							<input type="checkbox" value="">PayPal<br>
							<p>Safe payment online. Credit card needed PayPal account is not necessary.</p>
							<input type="checkbox" value="">Credit Card<br>
							<p>Safe monney transfer using on your bank account. Safe payment online. Credit card needed. Visa, Maestro, Discover, American Express</p>
						</div>
						<div class="form-group">
							<label> Credit Card Number</label>
							<input type="text" name="credit_card" class="form-control">
						</div>
						<div class="col-lg-12">
							<div class="col-lg-6" align="left">
								<p>Expiry Date</p>
							</div>
							<div class="col-lg-6" align="left">
								<p>CVV Code ?</p>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="col-lg-6">
								{{ Form::selectMonth('month') }}
								{{ Form::selectRange('range', 1, 31)}}
							</div>
							<div class="col-lg-6">
								<input type="text" name="code" class="form-control">
							</div>
						</div>
						<div class="form-group">
							<label> Name on Card</label>
							<input type="text" name="name_card" class="form-control">
						</div>
						<div class="col-lg-12">
							<button class="btn btn-lg-4 btn-default">Return to Detail</button>
							<button class="btn btn-lg-8 btn-default">Complete Order <i class="fa fa-arrow-right"></i></button>
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