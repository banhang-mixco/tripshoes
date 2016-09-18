@extends('frontend.layout.master')

@section('content')
	<div class="container">
		<div class="col-lg-offset-3 col-lg-6">
			<div class="form-group">
				<h3 class="text-left">Card</h3>						
			</div>
			<form>
				<div class="col-lg-12">
					<div class="col-lg-3"><img src="{{ asset('frontend/images/Depositphotos_90463484_original.jpg') }}" width="70%" ></div>
					<div class="col-lg-3 text-center">
						<p>Thao Nguyen's</p>
						<p>Countryside Bicycle</p>
						<p>21.01.17|1.00pm</p>
					</div>
					<div class="col-lg-3">
						<p>+ 1 -</p>
					</div>
					<div class="col-lg-3">
						<p>$19</p>
					</div>
				</div>
				<div class="col-lg-12" align="right">
					<p>$19</p>
				</div>
				<div class="col-lg-12">
					<button class="btn btn-lg-4 btn-default">Return Shopping</button>
					<button class="btn btn-lg-8 btn-default">Continue to Customer Detail<i class="fa fa-arrow-right"></i></button>
				</div>
			</form>
		</div>
	</div>
@endsection