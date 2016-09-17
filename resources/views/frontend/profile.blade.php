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
			<div class="container">
				<div class="row">
					<div class="col-lg-7">
						<form>
							<div class="row">
								<div class="col-lg-12">
									<h4>General Info</h4>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-6">
									<div class="form-group">
										<label class="control-label">First name</label>
										<input type="text" class="form-control">
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group">
										<label class="control-label">Last name</label>
										<input type="text" class="form-control">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-6">
									<div class="form-group">
										<label class="control-label">Mobile Phone</label>
										<input type="text" class="form-control">
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group">
										<label class="control-label">Work Phone</label>
										<div class="row">
											<div class="col-lg-5">
												<select class="form-control">
													<option>Country Code(+0)</option>
												</select>
											</div>
											<div class="col-lg-7">
												<input type="text" class="form-control">
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-12">
									<a href="#">
										<i class="fa fa-plus"></i>
										Add mobile number (if different)
									</a>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-12">
									<div class="form-group">
										<label class="control-label">Address</label>
										<input type="text" class="form-control">
									</div>
								</div>
								
							</div>
							<div class="row">
								<div class="col-lg-12">
									<strong>Change Password</strong>
								</div>
								
							</div>
							<div class="row">
								<div class="col-lg-6">
									<div class="form-group">
										<label class="control-label">Confirm current password</label>
										<input type="text" class="form-control">
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group">
										<label class="control-label">Confirm new password</label>
										<input type="text" class="form-control">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-6">
									<div class="form-group">
										<label class="control-label">New password</label>
										<input type="text" class="form-control">
									</div>
								</div>
								
							</div>
							<div>
								<button type="reset">Cancel</button>
								<button type="reset">Save Changes<i class="fa fa-check"></i></button>
							</div>
						</form>
					</div>
					<div class="col-lg-5">
						<div class="row">
							<div class="col-lg-6">
								<form>
									<div class="form-group">
										
										<input type="text" class="form-control" placeholder="Email"><!--<i class="fa fa-envelope"></i>-->
									</div>
									<div class="form-group">
										
										<input type="text" class="form-control" placeholder="Password"><!--<i class="fa fa-lock"></i>-->
									</div>
									<div class="form-group">
										
										<input type="text" class="form-control" placeholder="Username"><!--<i class="fa fa-envelope"></i>-->
									</div>
									<a href="#">
										<i class="fa fa-plus"></i>
										Add mobile number (if different)
									</a>
									<button type="submit" class="btn btn-success btn-lg">Save Changes</button>
								</form>
							</div>
							
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