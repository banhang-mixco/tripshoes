@extends('frontend.layout.master')

@section('content')
	
	<div class="checkout">
		<div class="cart-title">
			<h3 class="text-left">Cart</h3>						
		</div>
		<form action="{{ asset('/trip2') }}" method="POST">
			<div class="info-cart">
				<div>
					@if(count($bookings) > 0)
						@foreach($bookings as $booking)
							<div class="row">
								<div class="col-lg-1 text-center">
									<div class="cancel"><a href="">&times;</a></div>
								</div>
								<div class="col-lg-2">
									<div class="img-checkout"></div>
								</div>
								<div class="col-lg-4">
									<div class="tour_name">
										<p>Thao Nguyen's Countryside Bicycle</p>
										
										<span>{{ date('d.m.yy', strtotime($booking->date_start)) }}|{{ date('h:i A', strtotime($booking->start_time)) }}</span>
									</div>
								</div>
								<div class="col-lg-3 text-center">
									<p class="number_ticket">
										<a href="#" class="plus">
											<span class="sign-cart">+</span>
										</a>
										<span class="ticket">{{ $booking->number_ticket }}</span> 
										<a href="#" class="minus">
											<span class="sign-cart">-</span>
										</a>
									</p>
								</div>
								<div class="col-lg-2">
									<div class="price">
										<span class="price">${{ $booking->cost }}</span>
									</div>
								</div>
							</div>
						@endforeach
					@endif
				</div>
			</div>

			<div class="info-cart"> 
				<div class="row">
					<div class="col-lg-1"></div>
					<div class="col-lg-2"></div>
					<div class="col-lg-4"></div>
					<div class="col-lg-3"></div>
					<div class="col-lg-2">
						<span>${{ $total }}</span>
						
					</div>
					
				</div>
			</div>

			<div class="row">
				<div class="col-lg-12 btn-group ">
				  	<a href="{{ asset('/tripsnologin') }}" class="btn btn-default btn-lg-5 return">Return to Shopping</a>
					<button class="btn btn-lg-7 btn-default continue" type="submit">Continue Customer Detail <i class="fa fa-arrow-right"></i></button>
				</div>
			</div>
			
		</form>
	</div>
	
@endsection