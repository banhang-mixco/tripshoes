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
						<a href="#" data-toggle="modal" data-target="#signin">Sign In</a>
						<a href="#"><i class="fa fa-shopping-cart"></i>Cart</a>
					</div>
					<div class="modal fade" id="signin" tabindex="-1" role="dialog" aria-labelledby="signin" aria-hidden="true">
					  <div class="modal-dialog modal-sm">
					    <div class="modal-content">
					      <div class="modal-header">
					        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					        <h4 class="modal-title" id="myModalLabel">Sign In</h4>
					      </div>
					      <div class="modal-body">
					        <span>Sign in here if you have an account</span>
					        <form>
					        	<div class="form-group">
					        		<input type="text" class="form-control" placeholder="Email">
					        	</div>
					        	<div class="form-group">
					        		<input type="password" class="form-control" placeholder="Password">
					        	</div>
					        	<div class="pull-left">
					        		<input type="checkbox">Remember me
					        	</div>
					        	<div class="pull-right">
					        		<a href="#">I forgot my password</a>
					        	</div>
					        	<div class="clearfix"></div>
					        	<input type="submit" value="Sign In" class="btn btn-lg btn-success"> 
					        </form>
					        <a href="#" data-toggle="modal" data-target="#signup">Sign up with your access code</a>
					      </div>
					      
					    </div>
					  </div>
					</div>

					<div class="modal fade" id="signup" tabindex="-1" role="dialog" aria-labelledby="signup" aria-hidden="true">
					  <div class="modal-dialog modal-sm">
					    <div class="modal-content">
					      <div class="modal-header">
					        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					        <h4 class="modal-title" id="myModalLabel">Sign up with Access Code</h4>
					      </div>
					      <div class="modal-body">
					       	<form>
					       		<div class="form-group">
					        		<input type="text" class="form-control" placeholder="Name">
					        	</div>
					        	<div class="form-group">
					        		<input type="text" class="form-control" placeholder="Email">
					        	</div>
					        	<div class="form-group">
					        		<input type="text" class="form-control" placeholder="Password">
					        	</div>
					        	<div class="form-group">
					        		<input type="text" class="form-control" placeholder="Age">
					        	</div>
					        	<div class="form-group">
					        		<input type="text" class="form-control" placeholder="Country of Residence">
					        	</div>
					        	<div class="form-group">
					        		<input type="text" class="form-control" placeholder="Access Code">
					        	</div>
					        	<input type="submit" value="Get me access" class="btn btn-lg btn-success"> 
					       	</form>
					      </div>
					      
					    </div>
					  </div>
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
				<div class="trip">
					<div class="text-center">
						<h1>Every trips designed by someone who lives and breathes the cultures</h1>
						<p>TripShoes offers daily guided trips in Hoi An. Each trip allows you the chance to experience a culture in someone else's shoes. Because each trip has been created in partnership with someone who has a special bond with the location, every tour takes place on a specially designed route filled with personal stories and experiences that only someone who lives, loves and breathes the area will be able to share.</p>
					</div>
					<img src="{{ asset('frontend/images/Depositphotos_42350669_original.jpg') }}" width="100%" height="100%">

					<div class="row">
						<div class="col-lg-4">
							<div class="col-lg-2"></div>
							<div class="col-lg-10">
								<strong>An Empathetic Experience</strong>
								<p>The end result is an empathetic experience that allows you to truly step into someone's else shoes.</p>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="col-lg-2"></div>
							<div class="col-lg-8">
								<strong>With Simple Booking</strong>
								<p>All you need to do is download the TripShoes app onto your phone, and book a trip online or in-app.</p>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="col-lg-2"></div>
							<div class="col-lg-8">
								<strong>So the Journey Begins</strong>
								<p>Be at your starting location at the designated time, pop your headphones in your ear... and away you go.</p>
							</div>
						</div>
					</div>
				</div>

				<div class="gotchan text-center">
					<p>In order to truly allow you to step into someone's else shoes, Tripshoes has built a remarkably clever app to ensure that you won't miss a single beat of your journey.</p>
				</div>

				<div class="app">
					<div class="row">
						<div class="col-lg-6">
							<h1>A Remarkable App</h1>
							<p>By logging into the TripShoes app, you'll have a live travel professional with proficient English skills in your ear every step of the way.</p>
							<p>You'll also have an interactive map to show you where you are at any given moment.</p>
							<p>Built with the latest technology including state-of-the-art audio, the TripShoes app ensures that you'll never be standing at the back of a pack of travellers wondering "what on earth did my guide just say" ever again.</p>
						</div>
						<div class="col-lg-6">
							<img src="{{ asset('/images/smartmockups-129.png') }}" width="100%" height="100%">
						</div>
					</div>
					<h1>A Photobook of Memories</h1>
					<p>During your trip you'll be able to take photos with a single tap and send messages instantly to the rest of your group without having to leave the app at anytime. With the ability to upload photos, group chat and send instant messages to your fellow travellers in Photobook - every image, comment, or emoji is now saved forever.</p>
					<img src="{{ asset('frontend/images/Image21.png') }}" width="100%" height="100%">
						
					</div>
				</div>
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
					<img src="{{ asset('frontend/images/Image21.png') }}" width="100%" height="100%">
				</div>
			</div>
			<!-- End how to book -->

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
			<!-- form -->
			<div class="col-lg-12 text-center">
		       	<h1 class="text-center">Get early access</h1>
	            <div class="col-lg-offset-2 col-lg-8 text-center">
	                <form class="form-inline">
	                    <div class="col-lg-12">
                			<div class="col-lg-6">
	                        	<input type="text" name="youname" class="form-control" placeholder="Youname" width="100%">
                        	</div>
                			<div class="col-lg-6">
	                        	<input type="email" class="form-control" name="email" placeholder="E-mail" width="100%">
                        	</div>                           
	                    </div>
	                    <div class="col-lg-12">
	                    	<div class="col-lg-6">
		                        <select class="form-control">
		                            <option>When will you being Hoi An?	</option>
		                        </select>
	                        </div>
	                        <div class="col-lg-6">
	                        	<input type="text" name="country" class="form-control" placeholder="Which country are you from?" width="100%" >
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
		<!-- end form -->	    

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