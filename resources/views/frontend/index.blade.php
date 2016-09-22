@extends('frontend.layout.master')
	
@section('content')
	<div class="container">
		<div class="trip">
			<div class="text-center">
				<div class="col-lg-offset-1 col-lg-10"><h1>Every trips designed by someone who lives and breathes the cultures</h1></div>
				<div class="col-lg-12" style="padding:0px;"><p>TripShoes offers daily guided trips in Hoi An. Each trip allows you the chance to experience a culture in someone else's shoes. Because each trip has been created in partnership with someone who has a special bond with the location, every tour takes place on a specially designed route filled with personal stories and experiences that only someone who lives, loves and breathes the area will be able to share.</p></div>
			</div>
			<div class="col-lg-12 img-round bagia"></div>
			<div class="row">
				<div class="col-lg-4">
					<div class="col-lg-2"><img src="{{ asset('frontend/images/Icon3.png')}}"></div>
					<div class="col-lg-10 align_left">
						
						<p><strong> An Empathetic Experience</strong><br>The end result is an empathetic experience that allows you to truly step into someone's else shoes.</p>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="col-lg-2"><img src="{{ asset('frontend/images/Icon4.png')}}"></div>
					<div class="col-lg-10 align_left">
						
						<p><strong> With Simple Booking</strong><br>All you need to do is download the TripShoes app onto your phone, and book a trip online or in-app.</p>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="col-lg-2"><img src="{{ asset('frontend/images/Icon5.png')}}"></div>
					<div class="col-lg-10 align_left">
						
						<p><strong> So the Journey Begins</strong><br>Be at your starting location at the designated time, pop your headphones in your ear... and away you go.</p>
					</div>
				</div>
			</div>
		</div>

		<div class="gotchan text-center">
			<div class="col-lg-offset-2 col-lg-8 ">
				<img src="{{ asset('frontend/images/noun_145969.png') }}">
				<p>In order to truly allow you to step into someone's else shoes, Tripshoes has built a remarkably clever app to ensure that you won't miss a single beat of your journey.</p>
			</div>
		</div>

		<div class="app">
			<div class="row">
				<div class="col-lg-12">
					<img src="{{ asset('frontend/images/Icon11.png') }}">
				</div>
				<div class="col-lg-12 app_behind">
					<div class="col-lg-6">
						<h1>A Remarkable App</h1>
						<p>By logging into the TripShoes app, you'll have a live travel professional with proficient English skills in your ear every step of the way.</p>
						<p>You'll also have an interactive map to show you where you are at any given moment.</p>
						<p>Built with the latest technology including state-of-the-art audio, the TripShoes app ensures that you'll never be standing at the back of a pack of travellers wondering "what on earth did my guide just say" ever again.</p>
					</div>
					<div class="col-lg-6">
						<div class="remarkable img-round"></div>
					</div>
				</div>
			</div>
			<h1 class="text-center">A Photobook of Memories</h1>
			<p id="app_end">&nbsp;&nbsp;During your trip you'll be able to take photos with a single tap and send messages instantly to the rest of your group without having to leave the app at anytime. With the ability to upload photos, group chat and send instant  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;messages to your fellow travellers in Photobook - every image, comment, or emoji is now saved forever.</p>
			<div class="photobook"></div>
				
			</div>
		
	
	<!-- Begin A new form of giving -->
	<div class="col-lg-12 giving">
		<div class="col-lg-offset-1 col-lg-5 giving_content img-round">
			<div class="col-lg-12"><h1 class="text-center"> A new form of giving</h1></div>
			<div class="col-lg-offset-1 col-lg-10"><p class="text-center"> Every booking undertaken on TripShoes sees a donation made to assist the under privileged living in Vietnam. TripShoes is associated with a host of charities and education centres across Vietnam an Australia and you'll be pleased to know you'll be "giving with every foottep indertaken on each trip."</p></div>
		</div>
	</div>
	<!-- End giving -->

	<!-- How to book -->
	<div class="col-lg-12 book">
		<h4 class="text-center">How to Book</h4>
		<h1 class="text-center"> Booking is as easy as 1,2,3</h1>
		<div class="col-lg-12 book_content">
			<div class="col-lg-4 text-center">
				<img src="{{ asset('frontend/images/noun_464.png') }}">
				<div class="col-lg-offset-1 col-lg-10 ">
					<h4 class="text-center"> Download the TripShoes app</h4>
					<p class="text-center"> TripShoes is currently only available on iphone. Simply download the secure TripShoes app onto your iphone on the App Store</p>
				</div>
			</div>
			<div class="col-lg-4 text-center">
				<img src="{{ asset('frontend/images/noun_579236.png') }}">
				<h4 class="text-center"> Book a trip in-app or on the website</h4>
				<div class="col-lg-offset-1 col-lg-10 ">
					<p class="text-center"> Payments can be made via Paypal or credit card. All trips offer incredible value.</p>
				</div>
			</div>
			<div class="col-lg-4 text-center">
				<img src="{{ asset('frontend/images/noun_532311.png') }}">
				<h4 class="text-center"> Meet at the Starting Location</h4	>
				<div class="col-lg-offset-1 col-lg-10 ">
					<p class="text-center"> Arrive ad your starting locaition 5 minutes before your trip begins, log into your app, tap on Tour Mode and you're all ser. TripShoes will handle the rest.</p>
				</div>
			</div>
			
		</div>
	</div>
	<!-- End how to book -->
</div>
	<!-- Begin A new form of giving -->
	
	
	<!-- End how to book -->

	<!-- Begin Launch -->
	
  <div class="photolauch"></div> 
  <!-- Begin Launch -->
  <div class="col-lg-12">
   <div class="col-lg-offset-1 col-lg-10 launch_content">
    <h3 class="text-center"> Launch</h3>
    <h1 class="text-center"> Soft launch in Hoi An October 2016</h1>
    <p class="text-center">TripShoes is soft launching in Hoi An in October 2016. If you're in Hoi An in late 2016, registe now for ealy access and be amongst the first to experience one of our unique trips. Trips in this period will be heavily discounted so register quickly for early access trips.</p>
   </div>
  </div>
  <!-- form -->
  <div class="col-lg-12 text-center">
         <h1 class="text-center">Get early access</h1>
         <div class="col-lg-offset-2 col-lg-8 text-center">
             <form class="form_access">
                 <div class="row">
                 	<div class="col-lg-6">
                 		<div class="form-group">
                      		<input type="text" name="youname" class="form-control form_padding input-lg" placeholder="Youname" width="100%">
                  		</div>
                  	</div>
                  	<div class="col-lg-6">
                  		<div class="form-group">
                     	 	<input type="email" class="form-control form_padding input-lg" name="email" placeholder="E-mail" width="100%">
                 	 	</div>
                  	</div>
                 </div>
            	<div class="row">
                 	<div class="col-lg-6">
                 		<div class="form-group">
                      		<select class="form-control form_padding input-lg">
                      			<option value="">When will you be in Hoi An?</option>
                      		</select>
                  		</div>
                  	</div>
                  	<div class="col-lg-6">
                  		<div class="form-group">
                     	 	<input type="email" class="form-control form_padding input-lg" name="email" placeholder="Which country are you from?">
                 	 	</div>
                  	</div>
                 </div>	
                 <div class="row">
                 	<div class="col-lg-6">
                 		<div class="form-group">
                      		<select class="form-control form_padding input-lg">
                      			<option value="">Which trip are you most interested in?</option>
                      		</select>
                  		</div>
                  	</div>
                 </div>
                 <button class="btn btn-lg btn-success col-lg-12 form_padding">Get me early access</button>
             </form>
         </div>
     </div>

 <!-- end form -->

<!-- end form -->	    

@endsection