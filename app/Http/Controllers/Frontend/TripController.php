<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Repositories\Eloquent\TourInformationRepositoryEloquent;
use App\Repositories\Eloquent\ImageRepositoryEloquent;

class TripController extends Controller
{
    protected $tourinforepo;
    protected $imagerepo;
    /**
     * Create a new authentication controller instance.
     *
     * @param TourInformationRepositoryEloquent       $tourinfo      the tourinfo repository
     * @param ImageRepositoryEloquent       $tourinfo      the tourinfo repository
     *
     * @return void
     */
    public function __construct(TourInformationRepositoryEloquent $tourinfo, ImageRepositoryEloquent $image)
    {
        $this->tourinforepo = $tourinfo;
        $this->imagerepo = $image;
    }
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
    	$tourinfos = $this->tourinforepo->with('images')->simplePaginate(4);
        foreach ($tourinfos as $key => $value) {
                $tourlist[]=$value;
                $image=$value['images']->first();
                $tourlist[$key]['image']=$image['url'];
            }
    	return view('frontend.trips_no_login',compact('tourlist','tourinfos'));
    }
    /**
     * Display the specified resource.
     *
     * @param int $id id
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try {
            $tour = $this->tourinforepo->find($id);
            $images = $this->imagerepo->findByField('tour_information_id', $id);
            $banner = false;
			$text_banner = "";
            return  view('frontend.bicycle_experience', compact('tour', 'images','banner','text_banner'));
        } catch (Exception $ex) {
            Session::flash(trans('lang_admin_manager_user.danger_cf'), trans('lang_admin_manager_user.no_id'));
            return redirect()->route('trip');
        }
    }
}
