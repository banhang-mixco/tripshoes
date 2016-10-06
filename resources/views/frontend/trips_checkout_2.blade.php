@extends('frontend.layout.master')

@section('content')

	<div class="trip2">
		<form action="{{ asset('/trip3') }}" method="GET">
		<div class="trip2-content">
		<div class="row">
			<div class="col-lg-6">
				<div class="form-group trip_content edit_image">
					<h3>Traveller Number1</h3>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="pull-right">
					<img src="{{ asset('frontend/images/Image20.png') }}" class="showPlay img-rounded"><br>	
				</div>
			</div>
		</div>
			
				<div class="form-group trip_content">
					<label >E-mail</label>
					<input type="emai" name="emai" class="form-control form_padding">
				</div>
				<h3 id="detail">Detail</h3>
					<div class="row">
						<div class="col-lg-6">
							<div class="form-group">
								<label> First name</label>
								<input type="text" name="first_name" class="form-control form_padding">
							</div>
						</div>
						<div class="col-lg-6">
							<div class="form-group">
								<label> Last name</label>
								<input type="text" name="last_name" class="form-control form_padding">
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-lg-6">
							<div class="form-group">
								<label> Country of Residence</label>
								<input type="text" name="country_of_residence" class="form-control form_padding">
							</div>
						</div>
						<div class="col-lg-6">
							<div class="form-group">
								<label> Age</label>
								<input type="text" name="age" class="form-control form_padding">
							</div>
						</div>
					</div>

				
			
		</div>
		<div class="btn-group btn_trip2">
				  	<a href="{{ asset('/tripsnologin') }}" class="btn btn-lg-6 btn_addtravel">Add Traveller</a>
					<button type="submit" class="btn btn-lg complete">Continue to Payment <i class="fa fa-arrow-right"></i></button>
				</div>
		</form>
		</div>
	</div>
@endsection