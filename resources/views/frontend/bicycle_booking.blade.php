@extends('frontend.layout.master')

@section('content')
	<div class="container">
		<div class="back">
			<i class="fa fa-chevron-left"></i>Back to Trips
		</div>

		<div class="row">
			<div class="col-md-5">
			 	<h4>BICYCLE EXPERIENCE</h4>
			 	<h2>Thao Nguyen's Countryside Bicycle Trip</h2>
			 	<p>A bicycle experience taking you into the heart of Hoi An, through the eyes of a farmer from the countryside</p>
			 	<ul class="nav nav-tabs">
				  	<li class="active"><a data-toggle="tab" href="#about">About</a></li>
				  	<li><a data-toggle="tab" href="#host">Your Host</a></li>
				  	<li><a data-toggle="tab" href="#reviews">Reviews</a></li>
				  	<li><a data-toggle="tab" href="#locations">Starting Location</a></li>
				</ul>

				<div class="tab-content">
				  <div id="about" class="tab-pane fade in active">
				    <p>This is an experience that takes you into the world of a farmer living in Hoi An. You'll visit places that Thao frequents, you'll see where and how she grew up. Quyen has travelled across Vietnam, and been to many other places in the world.</p>
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
				<div class="form-group">
					<label class="control-label">Date of Trip</label>
					<input type="text" class="form-control">
				</div>
			</div>
			<div class="col-md-4">
				<label class="control-label">Time</label>
					<input type="text" class="form-control">
			</div>
		</div>
		<div class="row">
			<div class="col-md-4">
				<div class="form-group">
					<label class="control-label">Number of Tickets Purchased</label>
					<input type="text" class="form-control">
				</div>
			</div>
			<div class="col-md-4">
				<label class="control-label">Trip Type</label>
				<input type="text" class="form-control">
			</div>
		</div>
		<p>Note: Please be at your starting location no later than 10 minutes before your trip begins.</p>
	</div>
@endsection