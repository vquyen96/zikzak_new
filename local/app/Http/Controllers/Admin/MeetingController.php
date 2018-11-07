<?php

namespace App\Http\Controllers\Admin;

use App\Models\Meeting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class MeetingController extends Controller
{
    public function getList(){
        $data['items'] = Meeting::all();
        return view('admin.meeting', $data);
    }
    public function getAdd(){
        Meeting::create();
        return back();
    }
    public function postEdit(Request $request, $id){

        $data = $request->all();
        $meeting = Meeting::find($id);
        if( $request->has('img1') ){
            $data['img1'] = saveImage([$request->img1],730,'public/meeting/image');
            File::delete('local/storage/app/public/meeting/image/'.$meeting->img1,'local/storage/app/public/meeting/image/resized-'.$meeting->img1);
        }
        if( $request->has('img2') ){
            $data['img2'] = saveImage([$request->img2],730,'public/meeting/image');
            File::delete('local/storage/app/public/meeting/image/'.$meeting->img2,'local/storage/app/public/meeting/image/resized-'.$meeting->img2);
        }
        if( $request->has('img3') ){
            $data['img3'] = saveImage([$request->img3],730,'public/meeting/image');
            File::delete('local/storage/app/public/meeting/image/'.$meeting->img3,'local/storage/app/public/meeting/image/resized-'.$meeting->img3);
        }
        if( $request->has('img4') ){
            $data['img4'] = saveImage([$request->img4],730,'public/meeting/image');
            File::delete('local/storage/app/public/meeting/image/'.$meeting->img4,'local/storage/app/public/meeting/image/resized-'.$meeting->img4);
        }
//        dd($data);
        $meeting->update($data);
        return back();
    }

    public function getDelete($id){
        Meeting::destroy($id);
        return back();
    }
}
