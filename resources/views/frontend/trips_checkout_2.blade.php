@extends('frontend.layout.master')

@section('content')
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
@endsection