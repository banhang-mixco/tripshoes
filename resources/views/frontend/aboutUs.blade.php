@extends('frontend.layout.master')

@section('content')
<div class="about_us">
	<div class="container">
	<div class="row">
		<div class="col-lg-offset-3 col-lg-6">
			<h5 class="text-center">A few words</h5>
			<h1 class="text-center">About Us</h1>
			<p class="text-center"> TripShoes was founded in 2016 in Melbourne, Australia. Spearheaded by entrepreneurs from Vietnamese Australian backgrounds, TripShoes aims to bring greater empathy, understanding, homour and heart to the travel experience. Feel free to contact us for any questions.</p>
			<div class="text-center"><button class="btn btn-lg btn-default ">Contact Us</button></div>
		</div>
	</div>
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="col-lg-12 about_us_end">
			<div class="col-lg-offset-2 col-lg-8 text-center">
				<img src="{{ asset('frontend/images/Icon15.png') }}">
				<p> The TripShoes team believes that all trips will be better if there were more of the following: more humour, more history, more hope. By incorporating digital technology with persionalisted stories, we aim to bring you all of the above.</p>
			</div>
		</div>
	</div>
</div>
@endsection
	