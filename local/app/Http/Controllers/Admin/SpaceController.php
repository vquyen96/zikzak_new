<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Space;
use File;

class SpaceController extends Controller
{
    //
    public function getSpace(){
    	$data['spaces'] = Space::all();
    	return view('admin.space',$data);
    }

    public function postUpSpace(Request $request){
    	$space = new Space;
    	$space->space_image = saveImage($request->space_image,360,'public/home/image');
    	$space->save();
    	return back();
    }

    public function getDeleteSpace($id){
    	$strImage = Space::find($id)->space_image;
        $arrImage = explode(',',$strImage);
        foreach($arrImage as $image){
            File::delete('local/storage/app/public/home/image/'.$image,'local/storage/app/public/home/image/resized-'.$image);
        }
        Space::destroy($id);
    	return back();
    }
}
