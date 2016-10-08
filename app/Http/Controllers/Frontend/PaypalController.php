<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Paypalpayment;
use App\Repositories\Eloquent\BookingRepositoryEloquent;
use Auth;
use App\Booking;

class PaypalController extends Controller
{
	private $_apiContext;
	public function __construct(BookingRepositoryEloquent $bookinfo){
		 $this->_apiContext = Paypalpayment::apiContext(config('paypal_payment.Account.ClientId'), config('paypal_payment.Account.ClientSecret'));
        $this->_apiContext->setConfig(array(
            'mode' => 'sandbox',
            'Http.ConnectionTimeOut' => 30,
            'Http.Retry' => 1,
            'Service.EndPoint' => 'https://api.sandbox.paypal.com',
            'Log.LogEnabled' => true,
            'Log.FileName' => __DIR__.'/../PayPal.log',
            'Log.LogLevel' => 'FINE'
        ));
        $this->bookinfo = $bookinfo;
	}
    public function postPayment(Request $request){
        $expire_month = $request->get('expire_month');
        $expire_year = $request->get('expire_year');
        $code = $request->get('code');
        $name_card = $request->get('name_card');
        $credit_card = $request->get('credit_card');

        $currency = 'USD';

        $card = Paypalpayment::creditCard();
        $card->setType("visa")
            ->setNumber($credit_card)
            ->setExpireMonth($expire_month)
            ->setExpireYear($expire_year)
            ->setCvv2($code)
            ->setFirstName(Auth::user()->first_name)
            ->setLastName(Auth::user()->last_name);

        $fi = Paypalpayment::fundingInstrument();
        $fi->setCreditCard($card);

        $payer = Paypalpayment::payer();
        $payer->setPaymentMethod("paypal")
            ->setFundingInstruments(array($fi));


        $items =  array();
        $subtotal = 0;
        $bookings = Booking::join('tbl_tour_information','tbl_tour_information.id', '=', 'tbl_booking.tour_information_id')
                        ->join('tbl_ticket', 'tbl_ticket.id', '=', 'tbl_booking.ticket_id')
                        ->where('tbl_booking.status', 0)
                        ->where('tbl_booking.user_id', Auth::user()->id)
                        ->select('tbl_tour_information.name', 'tbl_booking.number_ticket', 'tbl_ticket.surcharge', 'tbl_tour_information.price')

        foreach($bookings as $book){
            $item = Paypalpayment::item();
            $item->setName($book->name)
                ->setDescription($book->name)
                ->setCurrency($currency)
                ->setQuantity($book->number_ticket)
                ->setTax($book->surcharge)
                ->setPrice($book->price);
            $items[] = $item;
            $subtotal += $book->number_ticket * $book->price;
        }

        $itemList = Paypalpayment::itemList();
        $itemList->setItems(array($item));
        
        $details = Paypalpayment::details();
        $details->setSubtotal($subtotal);

        $amount = Paypalpayment::amount();
        $amount->setCurrency($currency)
                // the total is $17.8 = (16 + 0.6) * 1 ( of quantity) + 1.2 ( of Shipping).
                ->setTotal($subtotal)
                ->setDetails($details);

        $transaction = Paypalpayment::transaction();
        $transaction->setAmount($amount)
            ->setItemList($item_list)
            ->setDescription('Payment description');

        $redirect_urls = Paypalpayment::redirectUrls();
        $redirect_urls->setReturnUrl(\URL::route('payment.status'))
            ->setCancelUrl(\URL::route('payment.status'));  

        try {
            $payment->create($this->_api_context);
        } catch (\PayPal\Exception\PPConnectionException $ex) {
            if (\Config::get('app.debug')) {
                echo "Exception: " . $ex->getMessage() . PHP_EOL;
                $err_data = json_decode($ex->getData(), true);
                exit;
            } else {
                die('Failed');
        }
        
        foreach($payment->getLinks() as $link) {
            
            if($link->getRel() == 'approval_url') {
                $redirect_url = $link->getHref();
                break;
            }
        }

        \Session::put('paypal_payment_id', $payment->getId());
        if(isset($redirect_url)) {
            // redirect to paypal
            return \Redirect::away($redirect_url);
        }
        return redirect('/trip1')
            ->with('error', 'Unknown error occurred');
        
    }

    public function getPaymentStatus(){
        $payment_id = \Session::get('paypal_payment_id');

        \Session::forget('paypal_payment_id');

        $payerId = \Input::get('PayerID');
        $token = \Input::get('token');

        if (empty($payerId) || empty($token)) {
            return redirect('/')
                ->with('message', 'Payment failed');
        }

        $payment = Paypalpayment::getById($payment_id, $this->_apiContext);
        $execution = Paypalpayment::PaymentExecution();

        $execution->setPayerId(Input::get('PayerID'));
        $result = $payment->execute($execution, $this->_api_context);

        echo '<pre>';print_r($result);echo '</pre>';exit; // DEBUG RESULT, remove it later

        if ($result->getState() == 'approved') { // payment made
            return redirect('/')
                ->with('success', 'Payment success');
        }
        return redirect('/')
            ->with('error', 'Payment failed');
    }
}
