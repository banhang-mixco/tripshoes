@extends('frontend.layout.master')

@section('content')
	<div class="col-lg-12" style="margin:0px 10px 10px 0px ;">
		<img src="{{ asset('frontend/images/Depositphotos_12619090_original.jpg') }}" width="100%" height="100%">
	</div>
	<div class="text-center">
		<h1>Experience village life through the eyes of a local</h1>
		<button class="btn btn-lg btn-default">Book now</button>
	</div>
	<div class="col-lg-12" style="margin-top:50px;">
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
	<!-- form -->
	<div class="col-lg-12 text-center">
       	<h1 class="text-center">Get early access</h1>
        <div class="col-lg-offset-2 col-lg-8 text-center">
            <form class="form-inline">
                <div class="col-lg-12">
        			<div class="col-lg-6">
                    	<input type="text" name="youname" class="form-control" placeholder="Youname" width="100%">
                	</div>
        			<div class="col-lg-6">
                    	<input type="email" class="form-control" name="email" placeholder="E-mail" width="100%">
                	</div>                           
                </div>
                <div class="col-lg-12">
                	<div class="col-lg-6">
                        <select class="form-control">
                            <option>When will you being Hoi An?	</option>
                        </select>
                    </div>
                    <div class="col-lg-6">
                    	<input type="text" name="country" class="form-control" placeholder="Which country are you from?" width="100%" >
                	</div>
                </div>
                <div class="col-lg-12">
                    <select class="form-control">
                        <option>Which trip are you most intered in?</option>
                    </select>
                </div>
                <button class="btn btn-lg btn-success col-lg-12">Get me early access</button>
            </form>
        </div>
    </div>
    <!-- end form -->
@endsection
	