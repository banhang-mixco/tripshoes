@extends('frontend.layout.master')

@section('content')
	<div class="container">
		<div class="col-lg-offset-3 col-lg-6">
			<form>
				<div class="form-group">
					<h3 class="text-left">Choose your payment method</h3>						
				</div>
				<div class="form-group">
					<input type="checkbox" value="">PayPal<br>
					<p>Safe payment online. Credit card needed PayPal account is not necessary.</p>
					<input type="checkbox" value="">Credit Card<br>
					<p>Safe monney transfer using on your bank account. Safe payment online. Credit card needed. Visa, Maestro, Discover, American Express</p>
				</div>
				<div class="form-group">
					<label> Credit Card Number</label>
					<input type="text" name="credit_card" class="form-control">
				</div>
				<div class="col-lg-12">
					<div class="col-lg-6" align="left">
						<p>Expiry Date</p>
					</div>
					<div class="col-lg-6" align="left">
						<p>CVV Code ?</p>
					</div>
				</div>
				<div class="col-lg-12">
					<div class="col-lg-6">
						{{ Form::selectMonth('month') }}
						{{ Form::selectRange('range', 1, 31)}}
					</div>
					<div class="col-lg-6">
						<input type="text" name="code" class="form-control">
					</div>
				</div>
				<div class="form-group">
					<label> Name on Card</label>
					<input type="text" name="name_card" class="form-control">
				</div>
				<div class="col-lg-12">
					<button class="btn btn-lg-4 btn-default">Return to Detail</button>
					<button class="btn btn-lg-8 btn-default">Complete Order <i class="fa fa-arrow-right"></i></button>
				</div>
			</form>
		</div>
	</div>
@endsection