<div id="header" class="{!! $banner ? 'has-banner' : 'no-banner' !!}">
	<div class="container">
		<div class="top">
			<div class="pull-left">
				<a href="#">Trips</a>
				<a href="#">Blog</a>
			</div>
			@if(!Auth::check())
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
			<div class="text-center">
				<a href="#"><img src=""></a>
				trip<span>shoes</span>
			</div>
		</div>

		{!! $text_banner !!}
	</div>
</div>