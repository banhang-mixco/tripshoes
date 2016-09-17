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
    return view('frontend.index');
});

Route::get('/article', function(){
	return view('frontend.article');
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
