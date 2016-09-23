@extends('frontend.layout.master')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-lg-12 my_booking">
			<div class="col-lg-12 text-center "><h1>My Bookings</h1></div>
			<div class="row">
				<div class="col-lg-6">
					<div style="background: url(frontend/images/Depositphotos_12619090_original.jpg) no-repeat; background-size:cover;background-position: -140px;" class="tripclass img-rounded">
					</div>
					<h2 class="text-center"> Thao Nguyen's</h2>
					<h2 class="text-center"> Countryside Bicycle Trip</h2>
					<p class="text-center">$19.00| 120mins | Bicycle Experience</p>
				</div>
				<div class="col-lg-6">
					<div style="background: url(frontend/images/Depositphotos_85776940_original.jpg) no-repeat; background-size:cover;background-position: -140px;" class="tripclass img-rounded">
					</div>
					<h2 class="text-center"> Uncle Vu's City</h2>
					<h2 class="text-center"> Walking Adventure</h2>
					<p class="text-center">$19.00| 120mins | Walking Experience</p>
				</div>
			</div>
			<div class="col-lg-12 text-center "><h1>Past Bookings</h1></div>
			<div class="row">
				<div class="col-lg-6">
					<div style="background: url(frontend/images/Depositphotos_70198701_original.jpg) no-repeat; background-size:cover;background-position: -140px;" class="tripclass img-rounded">
					</div>
					<h2 class="text-center"> Joe's Best of Hoi An</h2>
					<h2 class="text-center"> Bar Hop</h2>
					<p class="text-center">$19.00| 120mins | Walking Experience</p>
				</div>
				<div class="col-lg-6">
					<div style="background: url(frontend/images/Depositphotos_81744730_original.jpg) no-repeat; background-size:cover;background-position: -140px;" class="tripclass img-rounded">
					</div>
					<h2 class="text-center"> Tram Anh's Iphone</h2>
					<h2 class="text-center"> Photography Adventure</h2>
					<p class="text-center">$19.00| 120mins | Walking Experience</p>
				</div>
			</div>
		</div>			
	</div>
</div>
@endsection