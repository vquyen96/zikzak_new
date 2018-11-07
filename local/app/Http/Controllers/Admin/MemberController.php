<?php

namespace App\Http\Controllers\Admin;

use App\Models\Member;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class MemberController extends Controller
{
    public function getList(){
        $data['items'] = Member::orderByDesc('id')->get();
        return view('admin.member', $data);
    }
    public function getAdd(){
        Member::create();
        return back();
    }
    public function postEdit(Request $request, $id){

        $data = $request->all();
//dd($request);
        $member = Member::find($id);
        if ($request->ceo != null){
            $data['ceo'] = 1;
        }
        else{
            $data['ceo'] = 0;
        }
        if( $request->has('img') ){
            $data['img'] = saveImage([$request->img],360,'public/member/image');
            File::delete('local/storage/app/public/member/image/'.$member->img,'local/storage/app/public/member/image/resized-'.$member->img);
        }
        $member->update($data);
        return back();
    }

    public function getDelete($id){
        $member = Member::find($id);
        File::delete('local/storage/app/public/member/image/'.$member->img,'local/storage/app/public/member/image/resized-'.$member->img);
        $member->delete();
        return back();
    }
}
