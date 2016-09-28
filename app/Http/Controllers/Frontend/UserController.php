<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Hash;

class UserController extends Controller
{
    public function postRegister(Request $request){

    	$validator = Validator::make($request->all(), [
            'name' 		=> 'required',
            'email' 	=> 'required|unique:users,email',
            'password' 	=> 'required',
            'country' 	=> 'required',
            'code' 		=> 'required'

        ], [
            'name.required' => 'Phải nhập mã phố',
            'email.unique' => 'Mã phố đã tồn tại',
            'password.required' => 'Chưa có địa chỉ điểm đầu',
            'country.required' => 'Chưa có địa chỉ điểm cuối',
            'code.required' =>'đâs'	
        ]);
    	//Session::push('wrong_input', 0);
    	$name = $request->name('name');
    	$email = $request->name('email');
    	$password = $request->name('password');
    	$country = $request->name('country');
    	$code = $request->name('code');

    	if(Session::has($email)){
    		if(Session::get('email')[0] != $code){

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

    	$user = new App\Models\User;
    	$user->email = $email;
    	$user->password = Hash::make($password);
    	$user->country = $country;


    }	
}
