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
Route::group([ 'namespace' => 'Frontend' ], function () {
	/*Log in with access code and email*/
	Route::post('/postLogin', 'AuthController@postLogin');
	
	Route::post('/postRegister', 'UserController@postRegister');
	Route::get('/sendusemail', 'HomeController@contact');
	Route::post('/postSendCode', 'HomeController@postSendCode');
	Route::get('/signup', 'HomeController@signup');
	Route::get('/', 'HomeController@index');//21,22,1,11,5
	Route::post('/sendEmailChangePassword','PasswordController@sendEmailChangePassword');
	Route::get('/resetPassword', 'PasswordController@resetPassword');
	Route::post('/postResetPassword', 'PasswordController@postResetPassword');
	/*Log out*/
	Route::get('/logout', 'UserController@logout');
	/*Trip*/
	Route::get('/trip',['as' => 'trip','uses' => 'TripController@index']);
	Route::get('/trip/{id}',['uses' => 'TripController@show']);
	/*Profile with ajax*/
	Route::post('profile/avatar/', ['as' => 'profile.upload', 'uses' => 'UserController@upload']);
});


Route::get('/profile', function(){
	$banner = false;
	$text_banner = '';
	return view('frontend.profile', compact('banner', 'text_banner'));
});
Route::get('/article', function(){
	$banner = false;
	$text_banner = '';
	return view('frontend.article', compact('banner', 'text_banner'));
});//17

Route::get('/tripsnologin', function(){
	return view('frontend.trips_no_login', compact('banner', 'text_banner', 'class'));
});
Route::get('/aboutus', function(){
	$banner = false;
	$text_banner = '';
	return view('frontend.aboutUs', compact('banner', 'text_banner'));
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
	$banner = '';
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


Route::get('/sendusemail', function(){
	$banner = false;
	$text_banner = '';
	return view('frontend.send_us_email', compact('banner', 'text_banner'));
});
