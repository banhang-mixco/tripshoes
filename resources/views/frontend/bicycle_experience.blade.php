@extends('frontend.layout.master')
@section('header')
	<link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/bootstrap-datepicker.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/bootstrap-timepicker.min.css') }}">
@endsection
@section('content')
	<div class="container bacgound_no_login">
		<div class="back">
			<p><a href="{{ asset('/trip') }}"><i class="fa fa-chevron-left"></a></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Back to Trips</p>
		</div>

		<div class="row">
			<div class="col-md-12 walking">
				<div class="col-md-5">
				 	<h4>{{ strtoupper($tour->transport) }}</h4>
				 	<h2>{{ $tour->userid->first_name }} {{ $tour->userid->last_name }}'s {{ $tour->transport}}</h2>
				 	<p>{{ $tour->about }}</p>
				 	<ul class="nav nav-tabs">
					  	<li class="active"><a data-toggle="tab" href="#about">About</a></li>
					  	<li><a data-toggle="tab" href="#host">Your Host</a></li>
					  	<li><a data-toggle="tab" href="#reviews">Reviews</a></li>
					  	<li ><a data-toggle="tab" href="#locations">Starting Location</a></li>
					</ul>

					<div class="tab-content">
					  <div id="about" class="tab-pane fade in active">
					    <p>{{ $tour->about_tour }}</p>
					  </div>
					  <div id="host" class="tab-pane fade">
					    <p>{{ $tour->about_guide }}</p>
					  </div>
					  <div id="reviews" class="tab-pane fade">
					  	<p>{{ $tour->reviews }}</p>
					  </div>
					  <div id="locations" class="tab-pane fade">
					  	<p>
					  		<img src="https://maps.googleapis.com/maps/api/staticmap?center={{$tour->lat}},{{$tour->lng}}&zoom=13&size=420x270&maptype=roadmap&markers=color:red%7Clabel:S%7C{{$tour->lat}},{{$tour->lng}}&key=AIzaSyDPMvvFFuqTMQHcqtSbSyTVuwBE7c52GB0">
					  	</p>
					  </div>
					</div>				
				</div>
				<div class="col-md-7">
					<div class="col-md-8">	
						<img src="{{ asset('frontend/images/'.$image['url'].'') }}" class="img-round" width="100%" height="420px;">
					</div>
					<div class="col-md-4 img_right">
						@foreach($images as $item)
						<div class="col-md-10">
							<img src="{{ asset('frontend/images/'.$item->url.'') }}" class="img-round" width="90%" >
						</div>
						@endforeach
					</div>
				</div>
			</div>
		</div>
		<div class="row select_content">
			<div class="col-md-3">
				<div class="input-append date" data-date="Select Date" data-date-format="dd-mm-yyyy">
				  <input class="form-control" id="datepciker" size="16" type="text" value="Select Date">
				  <span class="add-on"><i class="icon-th"></i></span>
				</div>
			</div>
			<div class="col-md-3">
			<div class="input-group bootstrap-timepicker timepicker">
	            <input id="timepicker1" type="text" class="form-control input-small" >
	            <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
	        </div>
	        </div>
			<div class="col-md-3">
				<select class="form-control">
					@foreach($ticket as $ticket)
					<option>{{ $ticket->name }}</option>
					@endforeach
				</select>
			</div>
			<div class="col-md-3">
				<select class="form-control">
					@for($i=0;$i<=20;$i++)
					<option>{{$i}}</option>
					@endfor
				</select>
			</div>
		</div>
		<span>${{number_format((float)$tour->price, 2, '.', '')}}</span>
		@if(Auth::check())
		<div class="button_end">
			<a href="#" class="btn btn-lg btn-success">Add to cart</a>
			<a href="#" class="btn btn-lg btn-default" data-toggle="modal" data-target="#promo_code">Add promo code</a>
		</div>
		@else
		<div class="button_end">
			<a href="#" class="btn btn-lg btn-danger">Enquire Now</a>
			<a href="#" class="btn btn-lg btn-default" data-toggle="modal" data-target="#promo_code">Add promo code</a>
		</div>
		@endif
	</div>
	<div class="modal fade" id="promo_code" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	        <h4 class="modal-title" id="myModalLabel">Add promo code</h4>
	      </div>
	      <div class="modal-body">
	      	<div class="form-group">
	        	<label class="label-control">Promo Code</label>
	        	<input type="text" name="promo" class="form-control">
	        </div>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
	        <button type="button" class="btn btn-success">Send Promo Code</button>
	      </div>
	    </div>
	  </div>
	</div>
@section('script')
	<script type="text/javascript" src="{{ asset('frontend/js/bootstrap-datepicker.js') }}"></script>
	<script type="text/javascript" src="{{ asset('frontend/js/bootstrap-timepicker.min.js') }}"></script>
	<script type="text/javascript">
        $('#timepicker1').timepicker();
        $('#datepciker').datepicker();
    </script>
@endsection
@endsection