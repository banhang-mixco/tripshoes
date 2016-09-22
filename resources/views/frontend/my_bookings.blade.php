@extends('frontend.layout.master')

@section('content')
	<div class="col-lg-12" style="margin-top:50px;">
		<div class="col-lg-12 text-center" style="margin-bottom:50px;"><h1>My Bookings</h1></div>
		<div class="col-lg-offset-1 col-lg-5">
			<img src="{{ asset('frontend/images/Depositphotos_12619090_original.jpg') }}" class="img-rounded" width="100%" height="100%">
			<h1 class="text-center"> Thao Nguyen's</h1>
			<h1 class="text-center"> Countryside Bicycle Trip</h1>
			<p class="text-center">$19.00| 120mins | Bicycle Experience</p>
		</div>
		<div class="col-lg-5">
			<img src="{{ asset('frontend/images/Depositphotos_85776940_original.jpg') }}" class="img-rounded" width="100%" height="100%">
			<h1 class="text-center"> Uncle Vu's City</h1>
			<h1 class="text-center"> Walking Adventure</h1>
			<p class="text-center">$19.00| 120mins | Walking Experience</p>
		</div>
	</div>
	<div class="col-lg-12" style="margin-top:50px;">
		<div class="col-lg-12 text-center" style="margin-bottom:50px;"><h1>Past Bookings</h1></div>
		<div class="col-lg-offset-1 col-lg-5">
			<img src="{{ asset('frontend/images/Depositphotos_70198701_original.jpg') }}" class="img-rounded" width="100%" height="100%">
			<h1 class="text-center"> Joe's Best of Hoi An</h1>
			<h1 class="text-center"> Bar Hop</h1>
			<p class="text-center">$19.00| 120mins | Walking Experience</p>
		</div>
		<div class="col-lg-5">
			<img src="{{ asset('frontend/images/Depositphotos_81744730_original.jpg') }}" class="img-rounded" width="100%" height="100%">
			<h1 class="text-center"> Tram Anh's Iphone</h1>
			<h1 class="text-center"> Photography Adventure</h1>
			<p class="text-center">$19.00| 120mins | Walking Experience</p>
		</div>
	</div>
@endsection