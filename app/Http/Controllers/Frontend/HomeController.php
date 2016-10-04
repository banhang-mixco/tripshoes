<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Mail;
use Session;

class HomeController extends Controller
{
    public function index(){
    	$banner = '/frontend/images/Depositphotos_53914195_original.jpg';
		$text_banner = 
		'<div class="banner-header">
			<h4>Daily Guided Trips in Hoi An</h4>
			<h1>Take a trip in <br> someone else\'s shoes</h1>
			<a href="#form_send" class="btn btn-lg btn-success" role="button" data-toggle="toggle" data-target="#form_send">Get early access</a>
		</div>';
		/*Mail::send('frontend.sendemail', ['user' => 'hello'], function ($m) {

            $m->to('luongviet82@gmail.com', 'Luong Viet')->subject('Your Reminder!');
        });*/
	    return view('frontend.index', compact('banner', 'text_banner'));
    }

    public function contact(){
    	$banner = false;
		$text_banner = '';
		return view('frontend.send_us_email', compact('banner', 'text_banner'));
    }

    public function postSendCode(Request $request){

    	$validator = Validator($request->all(), [
            'email' => 'required|email',
            'yourname' => 'required',
            'message' => 'required'
        ],[
            'email.required' => 'Email is not blank',
            'email.email' => 'Please enter a valid email address',
            'yourname.required' => 'Your name is not blank',
            'message.required' => 'Message is not blank',
        ]);

    	$email = $request->get('email');
    	$yourname = $request->get('yourname');
    	$message = $request->get('message');

    	if($validator->fails()){
            return redirect('/sendusemail')
                ->withErrors($validator)
                ->withInput();
        }
        $access_code = $this->generateRandomString();

        Session::forget($email);
        Session::push($email, $access_code);

        Mail::send('frontend.sendemail', ['access_code' => $access_code, 'message' => $message], function ($m) use ($email, $yourname){

            $m->to($email, $yourname)->subject('Confirm Access Code');
        });
        return redirect('/')
        		->with(['sendSucess' => 'We sent you one email. Please check your email'])
        		->withInput();
    }

    public function signup(){
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
	    return view('frontend.signup', compact('banner', 'text_banner'));
    }

    private function generateRandomString($length = 12){
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
                $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

}
