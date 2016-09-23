<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="{{ asset('/bootstrap/css/bootstrap.min.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('/frontend/css/main.css') }}">
	</head>
	<body>

		<div id="header" class="has-banner" style="background: linear-gradient( rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.25) ), url(frontend/images/Depositphotos_12619090_original.jpg) no-repeat; background-size: cover;">
			<div class="container">
				<div class="top">
					<div class="pull-left">
						<div class="link">
							<a href="#">Trips</a>
							<a href="#" class="padding_left_10">Blog</a>	
						</div>
					</div>
					@if(!Auth::check())
						<div class="pull-right">
							<div class="link">
								<a href="#" data-toggle="modal" data-target="#signin">Sign In</a>
								<a href="#"><i class="fa fa-shopping-cart padding_left_10"></i>Cart</a>
							</div>
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
						@else
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
						@endif
					
				</div>
				<div class="text-center webname">
					<a href="#"><img src="{{ asset('frontend/images/Group3.png') }}"></a>
					trip<span>shoes</span>
				</div>
				<div class="border_header"></div>
				<div class="title-header text-center">
					<h1>Experience village life<br> through the eyes of a local</h1>
					<a href="" class="btn btn-lg">Book now</a>
				</div>
			</div>

		</div>
			<div id="content">
				<div class="container">
					<div class="row">
						<div class="col-lg-6 my_booking">
							<div style="background: url(frontend/images/Depositphotos_12619090_original.jpg) no-repeat; background-size:cover;background-position: -140px;" class="tripclass img-rounded">
							</div>
							<h2 class="text-center"> Thao Nguyen's</h2>
							<h2 class="text-center"> Countryside Bicycle Trip</h2>
							<p class="text-center">$19.00| 120mins | Bicycle Experience</p>
						</div>
						<div class="col-lg-6">
							<div style="background: url(frontend/images/Depositphotos_85776940_original.jpg) no-repeat; background-size:cover;background-position: -140px;" class="tripclass img-rounded">
							</div>
							<h2 class="text-center"> Uncle Vu's City</h2>
							<h2 class="text-center"> Walking Adventure</h2>
							<p class="text-center">$19.00| 120mins | Walking Experience</p>
						</div>
					</div>

					<div class="row my_booking">
						<div class="col-lg-6">
							<div style="background: url(frontend/images/Depositphotos_70198701_original.jpg) no-repeat; background-size:cover;background-position: -140px;" class="tripclass img-rounded">
							</div>
							<h2 class="text-center"> Joe's Best of Hoi An</h2>
							<h2 class="text-center"> Bar Hop</h2>
							<p class="text-center">$19.00| 120mins | Walking Experience</p>
						</div>
						<div class="col-lg-6">
							<div style="background: url(frontend/images/Depositphotos_81744730_original.jpg) no-repeat; background-size:cover;background-position: -140px;" class="tripclass img-rounded">
							</div>
							<h2 class="text-center"> Tram Anh's Iphone</h2>
							<h2 class="text-center"> Photography Adventure</h2>
							<p class="text-center">$19.00| 120mins | Walking Experience</p>
						</div>
					</div>
				</div>
				
				<!-- form -->
				<div class="container">
				<!-- form -->
				<div class="col-lg-12 text-center form_send">
			       	<h1 class="text-center">Get early access</h1>
			        <div class="col-lg-offset-2 col-lg-8 text-center">
			            <form class="form_access">
		                 <div class="row">
		                  <div class="col-lg-6">
		                   <div class="form-group">
		                        <input type="text" name="youname" class="form-control form_padding input-lg" placeholder="Youname" width="100%">
		                    </div>
		                   </div>
		                   <div class="col-lg-6">
		                    <div class="form-group">
		                        <input type="email" class="form-control form_padding input-lg" name="email" placeholder="E-mail" width="100%">
		                    </div>
		                   </div>
		                 </div>
		             <div class="row">
		                  <div class="col-lg-6">
		                   <div class="form-group">
		                        <select class="form-control form_padding input-lg">
		                         <option value="">When will you be in Hoi An?</option>
		                        </select>
		                    </div>
		                   </div>
		                   <div class="col-lg-6">
		                    <div class="form-group">
		                        <input type="email" class="form-control form_padding input-lg" name="email" placeholder="Which country are you from?">
		                    </div>
		                   </div>
		                 </div> 
		                 <div class="row">
		                  <div class="col-lg-12">
		                   <div class="form-group">
		                        <select class="form-control form_padding input-lg">
		                         <option value="">Which trip are you most interested in?</option>
		                        </select>
		                    </div>
		                   </div>
		                 </div>
		                 <button class="btn btn-lg btn-img col-lg-12 form_padding">Get me early access</button>
		             </form>
			        </div>
			    </div>
			    <!-- end form -->
			    </div>
			    <div id="footer">
	<div class="container">
		<div class="top">
			<div class="pull-left webname">
				<a href="#"><img src="{{ asset('frontend/images/Group3.png') }}"></a>
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
			<div class="border"></div>
		</div>

	</div>
	<div class="text-center copyright">
		<strong>© 2016 TripShoes Pty Ltd. All rights reserved.</strong>
	</div>
</div>
	    </body>
    </html>