<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\ResetsPasswords;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Repositories\Eloquent\UserRepositoryEloquent;
use Hash;
use Mail;
use Session;

class PasswordController extends Controller
{
	use ResetsPasswords;

	protected $user;
	public function __construct(UserRepositoryEloquent $user)
   {
       $this->middleware('guest');
       $this->user = $user;
   }

    public function sendEmailChangePassword(Request $request){
    	$email = $request->get('email');
    	Session::forget('email');
    	Session::push('email', $email);
    	Mail::send('frontend.sendEmailChangePassword', ['message' => $message], function ($m) use ($email){

            $m->to($email, 'abc')->subject('Reset Password');
        });
    }

    public function resetPassword(){
    	$banner = '/frontend/images/Depositphotos_53914195_original.jpg';
		$text_banner = 
		'<div class="banner-header">
			<h4>Daily Guided Trips in Hoi An</h4>
			<h1>Take a trip in <br> someone else\'s shoes</h1>
			<a href="#" class="btn btn-lg btn-success">Get early access</a>
		</div>';
		/*Mail::send('frontend.sendemail', ['user' => 'hello'], function ($m) {

            $m->to('luongviet82@gmail.com', 'Luong Viet')->subject('Your Reminder!');
        });*/
	    return view('frontend.resetPassword', compact('banner', 'text_banner'));
    }

    public function postResetPassword(Request $request){
    	$password = $request->get('password');
    	$confirm = $request->get('confirm');

    	$findUser = $this->user->findByField('email', Session::get('email')[0]);
    	$findUser->password = Hash::make($password);
    	$findUser->save();
    }
}
