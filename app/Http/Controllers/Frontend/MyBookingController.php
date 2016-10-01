<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Repositories\Eloquent\BookingRepositoryEloquent;
use App\Repositories\Eloquent\TourInformationRepositoryEloquent;
use App\Repositories\Eloquent\TicketRepositoryEloquent;
use App\Repositories\Eloquent\PromoRepositoryEloquent;
use App\Repositories\Eloquent\TourUserRepositoryEloquent;
use App\Repositories\Eloquent\TravellerRepositoryEloquent;
use App\Repositories\Eloquent\InvoiceRepositoryEloquent;
use App\Repositories\Eloquent\ImageRepositoryEloquent;
use Auth;
class MyBookingController extends Controller
{
	protected $bookingrepo;
    protected $tourinforepo;
    protected $ticketrepo;
    protected $promorepo;
    protected $touruserrepo;
    protected $travellerrepo;
    protected $invoicerepo;
    protected $imagerepo;
    /**
     * Create a new authentication controller instance.
     *
     * @param TourInformationRepositoryEloquent       $tourinfo      the tourinfo repository
     * @param BookingRepositoryEloquent       $image      the image repository
     * @param TicketRepositoryEloquent       $ticket      the ticket repository
     * @param PromoRepositoryEloquent       $promo      the promo repository
     * @param ImageRepositoryEloquent       $image      the image repository
     * @param TourUserRepositoryEloquent       $touruser      the touruser repository
     * @param TravellerRepositoryEloquent       $traveller      the traveller repository
     * @param InvoiceRepositoryEloquent       $invoice      the invoice repository
     *
     * @return void
     */
    public function __construct(BookingRepositoryEloquent $booking,ImageRepositoryEloquent $image, TourInformationRepositoryEloquent $tourinfo, TicketRepositoryEloquent $ticket, PromoRepositoryEloquent $promo, TourUserRepositoryEloquent $touruser, TravellerRepositoryEloquent $traveller, InvoiceRepositoryEloquent $invoice)
    {
        $this->tourinforepo = $tourinfo;

        $this->bookingrepo = $booking;
        $this->ticketrepo = $ticket;
        $this->promorepo = $promo;
        $this->touruserrepo = $touruser;
        $this->travellerrepo = $traveller;
        $this->invoicerepo = $invoice;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
    	$banner = false;
		$text_banner = '';
		$tourinfos = $this->tourinforepo->with('images')->simplePaginate(2);
        foreach ($tourinfos as $key => $value) {
                $tourlist[]=$value;
                $img=$value['images']->first();
                $tourlist[$key]['image']=$img['url'];
            }
        $bookings=$this->bookingrepo->findByField('user_id',Auth::id())->all();
		return view('frontend.my_bookings', compact('banner', 'text_banner','bookings','tourlist','image'));
    }
}
