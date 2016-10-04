@extends('frontend.layout.master')
@section('header')
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDPMvvFFuqTMQHcqtSbSyTVuwBE7c52GB0&libraries=places"></script>
@endsection
@section('content')
	<div class="container bacgound_no_login">
		<div class="back">
			<p><i class="fa fa-angle-left"></i> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Back to Trips</p>
		</div>
		<div class="row">
			<div class="col-md-12 walking">
			 	<div class="col-md-5">
				 	<h4>BICYCLE EXPERIENCE</h4>
				 	<h2>Thao Nguyen's</h2>
				 	<h2>Countryside Bicycle Trip</h2>
				 	<p>A bicycle experience taking you into the heart of Hoi An, throught the eyes of a farmer from the countryside.</p>
				 	<ul class="nav nav-tabs">
					  	<li><a data-toggle="tab" href="#about">About</a></li>
					  	<li><a data-toggle="tab" href="#host">Your Host</a></li>
					  	<li><a data-toggle="tab" href="#reviews">Reviews</a></li>
					  	<li class="active"><a data-toggle="tab" href="#locations">Starting Location</a></li>
					</ul>

					<div class="tab-content">
					  <div id="about" class="tab-pane fade ">
					    <p>This walking adventure takes you into the heart of the streets of Hoi An, streets filled with rich history and culture. Step into the shoes of Uncle Vu, who has been selling mooncakes on the back of his bicycle for the past 30 years and experience a trip like no other.</p>
					  </div>
					  <div id="host" class="tab-pane fade">
					    <p>This is an experience that takes you into the world of a farmer living in Hoi An. You'll visit places that Thao frequents, you'll see where and how she grew up. Quyen has travelled across Vietnam, and been to many other places in the world.</p>
					  </div>
					  <div id="location" class="tab-pane in active">
					  	<div class="row">
					  	<div class="col-lg-10 map"  id="map-canvas"></div>
					  	</div>
					  </div>
					</div>
					<div class="col-lg-12">
						<h3>Vy's Market Restaurant and Cooking School</h3>
						<p>3 Nguyen Hoang, Hoi An, Minh An, Viet Nam</p>
					</div>
				</div>			
				<div class="col-md-7">
					<div class="col-md-8">
						<img src="{{ asset('frontend/images/Depositphotos_12619090_original.jpg') }}" class="img-round" width="100%" height="420px;">
					</div>
					<div class="col-md-4 img_right">
						<div class="col-md-10">
							<img src="{{ asset('frontend/images/Depositphotos_43226125_original.jpg') }}" class="img-round" width="90%" >
						</div>
						<div class="col-md-10">
							<img src="{{ asset('frontend/images/Depositphotos_23980403_original.jpg') }}" class="img-round" width="90%" >
						</div>
						<div class="col-md-10">
							<img src="{{ asset('frontend/images/Depositphotos_90286486_original.jpg') }}" class="img-round" width="90%" height="25%">
						</div>
						<div class="col-md-10">
							<img src="{{ asset('frontend/images/Depositphotos_6783329_original.jpg') }}" class="img-round" width="90%" >
						</div>
					</div>
				</div>
			</div>
		</div>
		<form method="GET" action="{{ url('/trip1') }}">
			<div class="row select_content">
				<div class="col-md-3">
					<select class="form-control" name="date">
						<option>Select Date</option>
					</select>
				</div>
				<div class="col-md-3">
					<select class="form-control" name="time">
						<option>Select Time</option>
					</select>
				</div>
				<div class="col-md-3">
					<select class="form-control" name="ticket">
						<option value="">Select No of Tickets</option>
						@for($i=1; $i<=20; $i++)
							<option value="{{ $i }}">{{ $i }} tickets</option>
						@endfor
					</select>
				</div>
				<div class="col-md-3">
					<select class="form-control" name="type">
						<option value="">Select Type</option>
						@foreach($tickets as $ticket)
							<option value="{{ $ticket->id }}">{{ $ticket->name }}</option>
						@endforeach	
					</select>
				</div>
			</div>
			<span>$21.00</span>
			<input type="hidden" name="price" value="21">
			<div class="button_end">
				<button type="submit" href="{{ url('/trip1') }}" class="btn btn-lg btn-success">Enquire Now</button>
				<a href="#" class="btn btn-lg btn-default">Add promo code</a>
			</div>
		</form>
	</div>
@section('script')
	<script type="text/javascript" src="{{ asset('frontend/js/map.js') }}"></script>
@endsection
@endsection