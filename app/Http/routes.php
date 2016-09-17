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
Route::get('/indexlogin', function(){
	return view('frontend.indexlogin');
});

Route::get('/profile', function(){
	return view('frontend.profile');
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
Route::get('/bicycle_booking', function(){
	return view('frontend.bicycle_booking');
});
Route::get('/walking_experience', function(){
	return view('frontend.walking_experience');
});
Route::get('/blog', function(){
	return view('frontend.blog');
});
