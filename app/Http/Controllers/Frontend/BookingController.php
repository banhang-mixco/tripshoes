<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Session;
use App\Repositories\Eloquent\UserRepositoryEloquent;
use App\Repositories\Eloquent\BookingRepositoryEloquent;
use Auth;
use App\Models\Booking;

class BookingController extends Controller
{

	protected $userinfo;
    protected $bookinfo;
	public function __construct(UserRepositoryEloquent $userinfo, BookingRepositoryEloquent $bookinfo){
		$this->userinfo = $userinfo;
        $this->bookinfo = $bookinfo;
	}

    public function addtocart($id, Request $request){
        $date_booking = $request->get('date_booking');
        $date_booking = str_replace('.', '-', $date_booking);
        $date_booking = date('Y-m-d', strtotime($date_booking));
        $time_booking = $request->get('time_booking');
        $time_booking = date('Y-m-d H:i:s', strtotime($date_booking . $time_booking));
        $ticket_booking = $request->get('ticket_booking');
        $number_ticket = $request->get('number_ticket');
        $price = $request->get('price');
        $promo_id = $request->get('promo_id');
        $created_at = date('Y-m-d H:i:s');

        $booking = new Booking;
        $booking->user_id = Auth::user()->id;
        $booking->date_start = $date_booking;
        $booking->start_time = $time_booking;
        $booking->tour_information_id = $id;
        $booking->ticket_id = $ticket_booking;
        $booking->number_ticket = $number_ticket;
        $booking->cost = $price;
        $booking->promo_id = $promo_id;
        $booking->status = 0;
        $booking->date_created = $created_at;
        $booking->save();

        return redirect('/trip1');
    }

    public function trip1(Request $request){
        $bookings = $this->bookinfo->findWhere([
                    'status' => 0,
                    'user_id' => Auth::user()->id
                ]); 
        $total = 0;

        foreach($bookings as $booking){
            if($booking->status == 0){
                $total += $booking->cost;
            }
        }

    	$banner = false;
		$text_banner = '';
		return view('frontend.trips_checkout_1', compact('banner', 'text_banner', 'bookings', 'total'));
    }

    public function trip2(Request $request){
    	$date_booking = $request->get('date_booking');
        $date_booking = str_replace('.', '-', $date_booking);
        $date_booking = date('Y-m-d', strtotime($date_booking));

        $time_booking = $request->get('time_booking');
        $time_booking = date('H:i', strtotime($time_booking));

        $ticket_booking = $request->get('ticket_booking');
        $number_ticket = $request->get('number_ticket');
        $tour_id = $request->get('tour_id');
        $cost = $request->get('cost');
        $promo_id = $request->get('promo_id');

        $created_at = date('Y-m-d H:i:s');

        $booking = new Booking;
        $booking->user_id = Auth::user()->id;
        $booking->date_start = $date_booking;
        $booking->start_time = $time_booking;
        $booking->tour_information_id = $tour_id;
        $booking->ticket_id = $ticket_booking;
        $booking->number_ticket = $number_ticket;
        $booking->cost = $cost;
        $booking->promo_id = $promo_id;
        $booking->date_created = $created_at;
        $booking->save();

    	$banner = false;
		$text_banner = '';
		return view('frontend.trips_checkout_2', compact('banner', 'text_banner'));
    }

    public function trip3(Request $request){

    	$banner = false;
			
		$text_banner = '';

    	$findUser->save();

    	return view('frontend.trips_checkout_3', compact('banner', 'text_banner'));
    }
}
