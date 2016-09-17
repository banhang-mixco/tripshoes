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
				
					<ul class="nav-right pull-right list-inline">
						<li><a href="#">My Bookings</a></li>
						<li>
							<a href="#">Cart<span class="badge">1</span></a>
						</li>

						<li class="dropdown">
							<a href class="dropdown-toggle" data-toggle="dropdown">
								User
							</a>
							<div class="dropdown-menu pull-right with-arrow panel panel-default animated littleFadeInUp" role="menu">
								<ul class="dropdown-menu animated littleFadeInRight" role="menu">

					                <li>
					                    <a role="button" tabindex="0">
					                        <i class="fa fa-user"></i>Profile
					                    </a>
					                </li>
					                <li>
					                    <a role="button" tabindex="0">
					                        <i class="fa fa-cog"></i>Account
					                    </a>
					                </li>
					                <li>
					                    <a role="button" tabindex="0">
					                        <i class="fa fa-circle-logout"></i>Logout
					                    </a>
					                </li>

					            </ul>
							</div>
						</li>
					</ul>
					<div class="text-center">
						<a href="#"><img src=""></a>
						trip<span>shoes</span>
					</div>
				</div>
			</div>
		</div>

		<div id="content">
			<h1 class="text-center">Welcome to the TripShoes Blog</h1>
			<div class="row">
				<div class="col-md-3">
					<h2>How do I say that?</h2>
					20 Essential "Must Learn" Vietnamese words and how to pronounce them correctly
				</div>
				<div class="col-md-3">
					<h2>Children of the Dragon</h2>
					10 Interesting Insider Facts about Hoi An we bet you never knew
				</div>
				<div class="col-md-3">
					<h2>The Vietnamese eat what?</h2>
					10 Fun Facts about food in Vietnam we bet you never knew
				</div>
			</div>
			<div class="row">
				<div class="col-md-3">
					<h2>Vietnam - Do and Dont's</h2>
					A comprehensive list of things you can do and things you should never do in the country
				</div>
				<div class="col-md-3">
					<h2>What to pack for Vietnam</h2>
					The ultimate packing list for visiting what the Asia's hidden gems
				</div>
				<div class="col-md-3">
					<h2>Is it "fur" or "pho"?</h2>
					10 words to learn when ordering food at a Vietnamese restaurant
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