@extends('frontend.layout.master')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-lg-7">
				<form>
					<div class="row">
						<div class="col-lg-12">
							<img src="{{ asset('frontend/images/Depositphotos_4815623_original.jpg') }}" width="50px" height="50px">
							<h4>General Info</h4>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6">
							<div class="form-group">
								<label class="control-label">First name</label>
								<input type="text" class="form-control form_padding">
							</div>
						</div>
						<div class="col-lg-6">
							<div class="form-group">
								<label class="control-label">Last name</label>
								<input type="text" class="form-control form_padding">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6">
							<div class="form-group">
								<label class="control-label">Mobile Phone</label>
								<input type="text" class="form-control form_padding">
							</div>
						</div>
						<div class="col-lg-6">
							<div class="form-group">
								<label class="control-label">Work Phone</label>
								<div class="row">
									<div class="col-lg-5">
										<select class="form-control form_padding">
											<option>Country Code(+0)</option>
										</select>
									</div>
									<div class="col-lg-7">
										<input type="text" class="form-control form_padding">
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
								<input type="text" class="form-control form_padding">
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
								<input type="text" class="form-control form_padding">
							</div>
						</div>
						<div class="col-lg-6">
							<div class="form-group">
								<label class="control-label">Confirm new password</label>
								<input type="text" class="form-control form_padding">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6">
							<div class="form-group">
								<label class="control-label">New password</label>
								<input type="text" class="form-control form_padding">
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
					<div class="col-lg-offset-2 col-lg-8">
						<form>
							<div class="form-group">
								
								<input type="text" class="form-control form_padding" placeholder="Email"><!--<i class="fa fa-envelope"></i>-->
							</div>
							<div class="form-group">
								
								<input type="text" class="form-control form_padding" placeholder="Password"><!--<i class="fa fa-lock"></i>-->
							</div>
							<div class="form-group">
								
								<input type="text" class="form-control form_padding" placeholder="Username"><!--<i class="fa fa-envelope"></i>-->
							</div>
							<a href="#">
								<i class="fa fa-plus"></i>Add another link
							</a>
							<button type="submit" class="btn btn-success btn-lg">Save Changes</button>
						</form>
					</div>
					
				</div>
			</div>
		</div>
	</div>
@endsection	
		