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
use Validator;

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
        $validator = Validator::make($request->all(), [
            'email' => 'required|email'
        ]);
        if($validator->fails()){
            return response()->json([
                'errors' => $validator->messages(),
                'code' => 0
            ]);
        }
    	$email = $request->get('email');
    	Session::forget('email');
    	Session::push('email', $email);
    	Mail::send('frontend.sendEmailChangePassword', array(), function ($m) use ($email){

            $m->to($email, 'abc')->subject('Reset Password');
        });
        return response()->json([
            'message' => 'An confirmation was sent to your. Be check it',
            'code' => 1     
        ]);
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
        $validator = Validator::make($request->all(), [
            'password' => 'required',
            'confirm_password' => 'required|same:password'
        ]);
        if($validator->fails()){
            return response()->json([
                'errors' => $validator->messages(),
                'code' => 0
            ]);
        }

    	$password = $request->get('password');
    	$confirm = $request->get('confirm_password');

    	$findUser = $this->user->findByField('email', Session::get('email')[0]);
    	$findUser->password = Hash::make($password);
    	$findUser->save();

        return response()->json([
            'message' => 'New Password is saved',
            'code' => 1
        ]);
    }
}
