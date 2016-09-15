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