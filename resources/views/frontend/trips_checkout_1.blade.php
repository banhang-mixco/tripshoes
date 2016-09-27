@extends('frontend.layout.master')

@section('content')
	
	<div class="checkout">
		<div class="cart-title">
			<h3 class="text-left">Cart</h3>						
		</div>
		<form>
			<div class="info-cart">
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
							
							<span>21.01.17|1.00pm</span>
						</div>
					</div>
					<div class="col-lg-3 text-center">
						<p class="number_ticket"><span class="sign-cart">+</span> 1 <span class="sign-cart">-</span></p>
					</div>
					<div class="col-lg-2">
						<div class="price">
							<span class="price">$19</span>
						</div>
					</div>
				</div>
			</div>

			<div class="info-cart"> 
				<div class="row">
					<div class="col-lg-1"></div>
					<div class="col-lg-2"></div>
					<div class="col-lg-4"></div>
					<div class="col-lg-3"></div>
					<div class="col-lg-2">
						<span>$19</span>
						
					</div>
					
				</div>
			</div>
			
			<div class="row">
				<div class="col-lg-12 btn-group ">
				  	<a href="{{ asset('/tripsnologin') }}" class="btn btn-default btn-lg-5 return">Return to Shopping</a>
					<a href="{{ asset('/trip2') }}" class="btn btn-lg-7 btn-default continue">Continue Customer Detail <i class="fa fa-arrow-right"></i></a>
				</div>
			</div>
			
		</form>
	</div>
	
@endsection