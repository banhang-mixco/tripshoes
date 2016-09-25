@extends('frontend.layout.master')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-lg-offset-3 col-lg-6 payment">
				<form>
					<div class="row">
					<div class="form-group">
						<h3 class="text-left">Choose your payment method</h3>						
					</div>
					<div class="form-group radio-toolbar">
						<div class="radio_paypal">						
							<label class="control control--radio ">
								<span>PayPal</span>
								<input type="radio" name="radio" class="radio_btn" />
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
								<input type="radio" name="radio" checked="checked"/>
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
						<input type="text" name="credit_card" class="form-control form_payment">
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
							<select class="form_payment">
								<option>01</option>
							</select>
							</div>
							<div class="col-lg-6">
							<select class="form_payment">
								<option>16</option>
							</select>
							</div>
						</div>
						<div class="col-lg-6 payment_end">
							<input type="text" name="code" class="form-control form_payment">
						</div>
					</div>
					</div>
					<div class="form-group payment_end payment_card">
						<label> Name on Card</label>
						<input type="text" name="name_card" class="form-control form_payment">
					</div>
					<div class="row">
					<div class="col-lg-12 btn-group patment_btn">
					  	<button class="btn btn-lg-6 btn-default">Return to Detail</button>
						<button class="btn btn-lg-6 btn-default complete">Complete Order <i class="fa fa-arrow-right"></i></button>
					</div>
					</div>
					</div>
				</form>
			</div>
		</div>
	</div>
@endsection