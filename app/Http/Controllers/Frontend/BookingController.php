<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Session;
use App\Repositories\Eloquent\UserRepositoryEloquent;
use Auth;

class BookingController extends Controller
{

	protected $userinfo;
	public function __construct(UserRepositoryEloquent $userinfo){
		$this->userinfo = $userinfo;
	}

    public function trip1(Request $request){
    	Session::forget('booking');
    	$booking = new \stdClass();
    	$booking->{"date"} = $request->get('date');
    	$booking->{"time"} = $request->get('time');
    	$booking->{"ticket"} = $request->get('ticket');
    	$booking->{"type"} = $request->get('type');
    	$booking->{"price"} = $request->get('price');
    	Session::push('booking', $booking);
    	$banner = false;
		$text_banner = '';
		return view('frontend.trips_checkout_1', compact('banner', 'text_banner'));
    }

    public function trip2(Request $request){
    	

    	$banner = false;
		$text_banner = '';
		return view('frontend.trips_checkout_2', compact('banner', 'text_banner'));
    }

    public function trip3(Request $request){

    	$banner = false;
			
		$text_banner = '';
	
    	$email = $request->get('email');
    	$first_name = $request->get('first_name');
    	$last_name = $request->get('last_name');
    	$country_of_residence = $request->get('country_of_residence');
    	$age = $request->get('age');

    	$findUser = $this->userinfo->find(Auth::user()->id);
    	$findUser->country = $country_of_residence;
    	$findUser->age = $age;
    	$findUser->first_name = $first_name;
    	$findUser->last_name = $last_name;

    	$findUser->save();

    	return view('frontend.trips_checkout_3', compact('banner', 'text_banner'));
    }
}
