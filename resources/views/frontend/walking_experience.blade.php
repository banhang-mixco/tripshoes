@extends('frontend.layout.master')

@section('content')
	<div class="container">
		<div class="back">
			<i class="fa fa-chevron-left"></i>Back to Trips
		</div>

		<div class="row">
			<div class="col-md-5">
			 	<h4>WALKING EXPERIENCE</h4>
			 	<h2>Uncle Vu's City Walking Adventure</h2>
			 	<p>A walking adventure through the historical lanes and streets through the eyes of legendary Uncle Vu.</p>
			 	<ul class="nav nav-tabs">
				  	<li class="active"><a data-toggle="tab" href="#about">About</a></li>
				  	<li><a data-toggle="tab" href="#host">Your Host</a></li>
				  	<li><a data-toggle="tab" href="#reviews">Reviews</a></li>
				  	<li><a data-toggle="tab" href="#locations">Starting Location</a></li>
				</ul>

				<div class="tab-content">
				  <div id="about" class="tab-pane fade in active">
				    <p>This walking adventure takes you into the heart of the streets of Hoi An, streets filled with rich history and culture. Step into the shoes of Uncle Vu, who has been selling mooncakes on the back of his bicycle for the past 30 years and experience a trip like no other.</p>
				  </div>
				  <div id="host" class="tab-pane fade">
				    <p>This is an experience that takes you into the world of a farmer living in Hoi An. You'll visit places that Thao frequents, you'll see where and how she grew up. Quyen has travelled across Vietnam, and been to many other places in the world.</p>
				  </div>
				</div>

				
			</div>
			<div class="col-md-5">
				
			</div>
			<div class="col-md-2"></div>
		</div>
		<div class="row">
			<div class="col-md-4">
				<select class="form-control">
					<option>Select Date</option>
				</select>
			</div>
			<div class="col-md-4">
				<select class="form-control">
					<option>Select Time</option>
				</select>
			</div>
			<div class="col-md-4">
				<select class="form-control">
					<option>Select No of Tickets</option>
				</select>
			</div>
			<div class="col-md-4">
				<select class="form-control">
					<option>Select Type</option>
				</select>
			</div>
		</div>
		<span>$21.00</span>
		<div>
			<a href="#" class="btn btn-lg btn-success">Enquire Now</a>
			<a href="#" class="btn btn-lg btn-default">Add promo code</a>
		</div>
	</div>
@endsection