<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
	$banner = '/frontend/images/Depositphotos_53914195_original.jpg';
	$text_banner = 
	'<div class="banner-header">
		<h4>Daily Guided Trips in Hoi An</h4>
		<h1>Take a trip in <br> someone else\'s shoes</h1>
		<a href="#" class="btn btn-lg btn-success">Get early access</a>
	</div>';
    return view('frontend.index', compact('banner', 'text_banner'));
});//21,22,1,11,5

Route::get('/profile', function(){
	$banner = false;
	$text_banner = '';
	return view('frontend.profile', compact('banner', 'text_banner'));
});
Route::get('/article', function(){
	$banner = false;
	$text_banner = '';
	return view('frontend.article', compact('banner', 'text_banner'));
});

Route::get('/tripsnologin', function(){
	$banner ='';
	$text_banner = '';
	return view('frontend.trips_no_login', compact('banner', 'text_banner'));
});
Route::get('/aboutus', function(){
	$banner = false;
	$text_banner = '';
	return view('frontend.aboutUs', compact('banner', 'text_banner'));
});
Route::get('/bicycle_experience', function(){
	$banner = false;
	$text_banner = '';
	return view('frontend.bicycle_experience', compact('banner', 'text_banner'));
});
Route::get('/support', function(){
	$banner = false;
	$text_banner = '';
	return view('frontend.support', compact('banner', 'text_banner'));
});
Route::get('/trip1', function(){
	$banner = false;
	$text_banner = '';
	return view('frontend.trips_checkout_1', compact('banner', 'text_banner'));
});
Route::get('/trip2', function(){
	$banner = false;
	$text_banner = '';
	return view('frontend.trips_checkout_2', compact('banner', 'text_banner'));
});
Route::get('/trip3', function(){
	$banner = false;
	$text_banner = '';
	return view('frontend.trips_checkout_3', compact('banner', 'text_banner'));
});
Route::get('/mybookings', function(){
	$banner = false;
	$text_banner = '';
	return view('frontend.my_bookings', compact('banner', 'text_banner'));
});
Route::get('/tripslogin', function(){
	$banner = false;
	$text_banner = '';
	return view('frontend.trip_login', compact('banner', 'text_banner'));
});
Route::get('/tripswithlogin', function(){
	$banner = false;
	$text_banner = '';
	return view('frontend.trips_with_login', compact('banner', 'text_banner'));
});
Route::get('/bicycle_booking', function(){
	$banner = false;
	$text_banner = '';
	return view('frontend.bicycle_booking', compact('banner', 'text_banner'));
});
Route::get('/walking_experience', function(){
	$banner = false;
	$text_banner = '';
	return view('frontend.walking_experience', compact('banner', 'text_banner'));
});//15
Route::get('/blog', function(){
	$banner = false;
	$text_banner = '';
	return view('frontend.blog', compact('banner', 'text_banner'));
});//14
