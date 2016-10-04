<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Hash;
use Validator;
use Session;
use App\Models\User;
use Auth;
use App\Repositories\Eloquent\UserRepositoryEloquent;
class UserController extends Controller
{
    protected $userrepo;
    /**
     * Create a new authentication controller instance.
     *
     * @param UserRepositoryEloquent $user the user repository
     *
     * @return void
     */
    public function __construct(UserRepositoryEloquent $user)
    {
        $this->userrepo = $user;
    }
    /**
     * Store a report to the database.
     *
     * @param Request $request the reporting request
     *
     * @return Illuminate\Http\Response
     */
    public function upload(Request $request)
    {
        $data= $request->all();
        $folderPath = config('path.avatar');
        $file = $request->file('file');
        $filename = '';
        $upload = '';
        if (null != $file) {
            $filename = time() . '_'.$file->getClientOriginalName();
            $upload = $file->move($folderPath, $filename);
            $data['avatar'] = $filename;
        }
        $list = $this->userrepo->find(Auth::user()->id);
        if (!empty($list)) {
            $datareturn = $this->userrepo->update($data, Auth::user()->id);
            return response()->json(['avatar'=>$datareturn,'mes'=>'update avatar success'], 200);
        } else {
            return response()->json(['mes'=>'error update image']);
        }
    }
     /**
     * Store a report to the database.
     *
     * @param Request $request the reporting request
     *
     * @return Illuminate\Http\Response
     */
    public function postRegister(Request $request){

    	$validator = Validator::make($request->all(), [
            'name' 		=> 'required',
            'email' 	=> 'required|unique:tbl_user,email',
            'password' 	=> 'required',
            'country' 	=> 'required',
            'code' 		=> 'required'

        ], [
            'name.required' => 'Name is not blank',
            'email.required' => 'Email is not blank',
            'email.unique' => 'Email is not unique',
            'password.required' => 'Password is not blank',
            'country.required' => 'Country of Residence is not blank',
            'code.required' =>'Access Code is not blank and suitable with mail we sent you'	
        ]);

        if($validator->fails()){
            return redirect('/signup')
                ->withErrors($validator)
                ->withInput();
        }
    	$name = $request->get('name');
    	$email = $request->get('email');
    	$password = $request->get('password');
        $age = $request->get('age');
        $country = $request->get('country');
    	$code = $request->get('code');

    	if(Session::has($email)){
    		if(Session::get($email)[0] != $code){
                return 'hello';

    			return response()->json([
	                'errors' => 'Wrong access code',
	                'code' => 0
	            ]);
    		}
            
    	}else{
			return response()->json([
                'errors' => 'This email have not been sent access code',
                'code' => 1
            ]);
    	}

    	$user = new User;
        $user->username = $name;
    	$user->email = $email;
        $user->age = $age;
    	$user->password_hash = Hash::make($password);
        $user->password = Hash::make($password);
    	$user->country = $country;
        $user->save();

        return 'Thành công';
    }
     /**
     * log out a report to the database.
     *
     * @return Illuminate\Http\Response
     */
    public function logout(){
        Auth::logout();
        return redirect('/');
    }
    /**
     * Store a report to the database.
     *
     * @param Request $request the reporting request
     *
     * @return Illuminate\Http\Response
     */
    public function getprofile(){
        $banner = false;
        $text_banner = '';
        return view('frontend.profile', compact('banner', 'text_banner'));
    }

}
