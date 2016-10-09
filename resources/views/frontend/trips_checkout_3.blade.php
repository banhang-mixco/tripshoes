@extends('frontend.layout.master')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-lg-offset-3 col-lg-6 payment">
				<form action="{{ url('/transaction') }}" method="POST" id="checkout-form">
					<div id="charge-error" class="red {!! !Session::has('error') ? 'hidden' : '' !!}">
						{{ Session::get('error') }}
					</div>
					<div class="row">
					<div class="form-group">
						<h3 class="text-left">Choose your payment method</h3>						
					</div>
					<div class="form-group radio-toolbar">
						<div class="radio_paypal">						
							<label class="control control--radio ">
								<span>PayPal</span>
								<input type="radio" name="radio" class="radio_btn" value="paypal" />
								<div class="control__indicator"></div><br>
								<div class="row">
									<div class="col-lg-10">
										<p>Safe payment online. Credit card needed PayPal account is not necessary.</p>
									</div>
									<div class="col-lg-2"></div>
								</div>								
							</label>
						</div>
						<div class="radio_credit">
							<label class="control control--radio">Credit Card
								<input type="radio" name="radio" checked="checked" value="credit_card"/>
								<div class="control__indicator"></div>
								<div class="row">
									<div class="col-lg-10">
										<p>Safe monney transfer using on your bank account. Safe payment online. Credit card needed. Visa, Maestro, Discover, American Express</p>
									</div>
									<div class="col-lg-2"></div>
								</div>
								
							</label>
						</div>
					</div>
					<div class="form-group credit_card">
						<label> Credit Card Number</label>
						<input type="text" name="credit_card" class="form-control form_payment" id="card-number">
						<span class="pull-right"><i class="fa fa-check"></i></span>
					</div>
					<div class="col-lg-12 text_payment">
						<div class="col-lg-6" align="left">
							<p>Expiry Date</p>
						</div>
						<div class="col-lg-6" align="left">
							<p>CVV Code ?</p>
						</div>
					</div>
					<div class="row">
					<div class="col-lg-12">
						<div class="col-lg-6">
							<div class="col-lg-6">
							<select class="form_payment" name="expire_month" id="card-expiry-month">
								<option value="1">01</option>
							</select>
							</div>
							<div class="col-lg-6">
							<select class="form_payment" name="expire_year" id="card-expiry-year">
								<option value="16">16</option>
							</select>
							</div>
						</div>
						<div class="col-lg-6 payment_end">
							<input type="text" name="code" class="form-control form_payment" id="card-cvc">
						</div>
					</div>
					</div>
					<div class="form-group payment_end payment_card">
						<label> Name on Card</label>
						<input type="text" name="name_card" class="form-control form_payment" id="card-name">
					</div>
					
					<div class="btn-group patment_btn">
						<a href="{{ asset('/trip2') }}" class="btn btn-default" style="width:50%;">Return to Detail</a>
						<button class="btn btn-default complete" style="width:50%;height:60px;font-size:26px;">Complete Order <i class="fa fa-arrow-right"></i></button>
					</div>
					
					</div>
				</form>
			</div>
		</div>
	</div>
@endsection