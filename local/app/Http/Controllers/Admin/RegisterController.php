<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Register;

class RegisterController extends Controller
{
    //
    public function getRegister(){
    	$data['registers'] = Register::orderBy('register_id','desc')->get();
    	return view('admin/register',$data);
    }

    public function getRegisterDetail(){

    }
}
