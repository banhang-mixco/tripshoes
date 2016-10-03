<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use Hash;

class AuthController extends Controller
{
   	public function postLogin(Request $request){
   		$validator = Validator($request->all(), [
            'email' => 'required',
            'password' => 'required'
        ]);

        $email = $request->get('email');
        $password = $request->get('password');
        $remember = $request->has('remember');
        if($validator->fails()){
                return response()->json([
                    'errors' => $validator->messages(),
                    'code' => 0
                ]);
            }
        if(!Auth::attempt(['email' => $email, 'password' => $password], $remember)){
        	return response()->json([
                'errors' => 'Mật khẩu hoặc tài khoản sai, hãy thử lại!',
                'code' => 1
            ]);
            
        }else{
            return redirect('/');
        }
   	}
}
