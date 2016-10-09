@extends('frontend.layout.master')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-lg-12 my_booking">
			<div class="col-lg-12 text-center "><h1>{{ trans('lang_user.header.my_booking') }}</h1></div>
			<div class="row">
				@foreach($tourlist as $item)
				@foreach($bookings as $itembook)
				@if($item->guide_id == $itembook->user_id)
				<div class="col-lg-6 my_booking">
					<a href="{{ route('booking.show',$item->id) }}">
					<div style="background: url(upload/images/{{$item->image}}) no-repeat; background-size:cover;background-position: -140px;" class="tripclass img-rounded">
					</div>
					</a>
					<h2 class="text-center"> {{ $item->userid->first_name }} {{ $item->userid->last_name }}'s</h2>
					<a href="{{ route('booking.show',$item->id) }}"><h2 class="text-center"> {{ $item->name }}</h2></a>
					<p class="text-center">${{number_format((float)$item->price, 2, '.', '')}} | {{$item->time_period}}mins | {{ $item->transport }}</p>
				</div>
				@endif
				@endforeach
				@endforeach
			</div>
			<div class="col-lg-12 text-center "><h1>{{ trans('lang_user.booking.past_booking') }}</h1></div>
			<div class="row">
				@foreach($tourlist as $item)
				@foreach($bookings as $itembook)
				@if($item->guide_id == $itembook->user_id && date('Y-m-d',strtotime($itembook->start_time)) <= date('y-m-d'))
				<div class="col-lg-6 my_booking">
					<a href="{{ route('booking.show',$item->id) }}">
					<div style="background: url(upload/images/{{$item->image}}) no-repeat; background-size:cover;background-position: -140px;" class="tripclass img-rounded">
					</div>
					</a>
					<h2 class="text-center"> {{ $item->userid->first_name }} {{ $item->userid->last_name }}'s</h2>
					<a href="{{ route('booking.show',$item->id) }}"><h2 class="text-center"> {{ $item->name }}</h2></a>
					<p class="text-center">${{number_format((float)$item->price, 2, '.', '')}} | {{$item->time_period}}mins | {{ $item->transport }}</p>
				</div>
				@endif
				@endforeach
				@endforeach
			</div>
		</div>			
	</div>
</div>
@endsection