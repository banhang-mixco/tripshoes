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
	$banner = 'dsadsa';
	$text_banner = 
	'<div class="banner-header">
		<h4>Daily Guided Trips in Hoi An</h4>
		<h1>Take a trip in someone else\'s shoes</h1>
		<a href="#" class="btn btn-lg btn-success">Get early access</a>
	</div>';
    return view('frontend.index', compact('banner', 'text_banner'));
});//21,22,1,11,5

Route::get('/profile', function(){
	$banner = false;
	$text_banner = '';
	return view('frontend.profile');
});
Route::get('/article', function(){
	$banner = false;
	$text_banner = '';
	return view('frontend.article', compact('banner', 'text_banner'));
});

Route::get('/tripsnologin', function(){
	return view('frontend.trips_no_login');
});
Route::get('/aboutus', function(){
	return view('frontend.aboutUs');
});
Route::get('/bicycle_experience', function(){
	return view('frontend.bicycle_experience');
});
Route::get('/support', function(){
	return view('frontend.support');
});
Route::get('/trip1', function(){
	return view('frontend.trips_checkout_1');
});
Route::get('/trip2', function(){
	return view('frontend.trips_checkout_2');
});
Route::get('/trip3', function(){
	return view('frontend.trips_checkout_3');
});
Route::get('/mybookings', function(){
	return view('frontend.my_bookings');
});
Route::get('/tripslogin', function(){
	return view('frontend.trip_login');
});
Route::get('/tripswithlogin', function(){
	return view('frontend.trips_with_login');
});
Route::get('/bicycle_booking', function(){
	return view('frontend.bicycle_booking');
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
