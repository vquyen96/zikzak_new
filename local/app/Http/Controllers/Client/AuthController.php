<?php

namespace App\Http\Controllers\Client;

use App\Models\Account;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    function form_login(){
        return view('client.auth.login');
    }

    function login(Request $request){
        $arr = ['username' => $request->email, 'password' => $request->password];

        if(Auth::attempt($arr, false)){
            if(Auth::user()->status == 1){
                Auth::logout();
                Session::flush();
                return redirect()->route('login_client')->with('error','Tài khoản không hoạt động, vui lòng liên hệ ban quản trị!');
            }
            return redirect()->route('home')->with('success','Đăng nhập thành công');
        }
        else{
            return redirect()->route('login_client')->with('error','Tài khoản hoặc mật khẩu của bạn không đúng');
        }
    }

    function logout(){
        Auth::logout();
        Session::flush();
        return redirect()->route('home');
    }

    function form_register(){
        $data = [
            'fullname' => '',
            'email' => '',
            'password' => '',
            'password_1' => '',
            'card_id' => '',
            'phone' => ''
        ];

        return view('client.auth.signup',$data);
    }

    function register(Request $request){
        $req = $request->all();

        $user = DB::table('accounts')->where('email',$req['email'])->orWhere('phone',$req['phone'])->orWhere('card_id',$req['card_id'])->first();
        if($user){
            return view('client.auth.signup',$req)->with('error','Email hoặc số điện thoại hoặc số CMND đã tồn tại trên hệ thống ');
        }
        else {
            $req['status'] = 2;
            $pass = $req['password'];
            $req['password'] = bcrypt($req['password']);
            $req['created_at'] = time();
            $req['username'] = $req['email'];
            unset($req['password_1']);
            if(Account::create($req)){
                $arr = ['username' => $req['email'], 'password' => $pass];
                Auth::attempt($arr, false);
                return redirect()->route('home')->with('success','Đăng ký thành công');
            }else {
                return view('client.auth.signup',$req)->with('error','Đăng ký không thành công, vui lòng thử lại ');
            }
        }
    }


    function profile(){
        $user = Auth::user();
        $data = [
            'user' => $user
        ];
        return view('client.auth.profile',$data);
    }

    function update_user(Request $request){
        $req = $request->get('user');
        $user = Auth::user();

        $image = $request->file('img');
        if ($request->hasFile('img')) {
            $req['avatar'] = saveImageArticle([$image], 'user');
        }

        if(DB::table('accounts')->where('id',$user->id)->update($req)){
            return back()->with('success','Cập nhật thành công');
        }else {
            return back()->with('error','Cập nhật không thành công');
        }
    }

    function change_pass(){
        return view('client.auth.password');
    }

    function action_change_pass(Request $request){
        $req = $request->all();
        $user = Auth::user();

        if(!Hash::check($req['pass_old'],$user->password)){
            return back()->with('error','Mật khẩu cũ không chính xác');
        }else{
            if(DB::table('accounts')->where('id',$user->id)->update(['password' => bcrypt($req['pass_new_1'])])){
                return back()->with('success','Đổi mật khẩu thành công');
            }else {
                return back()->with('error','Đổi mật khẩu không thành công, vui lòng thử lại sau');
            }
        }
    }

}
