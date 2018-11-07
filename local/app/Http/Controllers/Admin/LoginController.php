<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\Http\Requests\Admin\LoginRequest;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    //
    public function getLogin(){
    	return view('admin.login');
    }

    public function postLogin(LoginRequest $request){
    	$arr = [
            'email' => $request->email,
            'password' => $request->password,
        ];

    	$this->checkUserBot($arr);
        if($request->remember = 'Remember Me'){
            $remember = true;
        }else{
            $remember = false;
        }
        if(Auth::attempt($arr,$remember)){
            return redirect()->intended('admin');
        }else{
            return redirect()->back()->with(['error' => 'Incorrect email/password']);
        }
    }

}
