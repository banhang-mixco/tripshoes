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

class UserController extends Controller
{
    public function postRegister(Request $request){

    	$validator = Validator::make($request->all(), [
            //'name' 		=> 'required',
            'email' 	=> 'required|unique:tbl_user,email',
            'password' 	=> 'required',
            //'country' 	=> 'required',
            'code' 		=> 'required'

        ], [
            //'name.required' => 'Name is not blank',
            'email.required' => 'Email is not blank',
            'email.unique' => 'Email is not unique',
            'password.required' => 'Password is not blank',
            //'country.required' => 'Country of Residence is not blank',
            'code.required' =>'Access Code is not blank and suitable with mail we sent you'	
        ]);

        if($validator->fails()){
            return redirect('/signup')
                ->withErrors($validator)
                ->withInput();
        }
    	//Session::push('wrong_input', 0);
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

    public function logout(){
        Auth::logout();
        return redirect('/');
    }	
}
