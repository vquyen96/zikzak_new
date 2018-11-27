<?php

namespace App\Http\Controllers\Admin;

use App\Models\Image;
use App\Models\Location;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class ImageController extends Controller
{
    public function getList(){
        $locations = Location::orderBy('order', 'asc')->get();
        foreach($locations as $location){
            $location->images = Image::where('location_id', $location->id)->get();
        }
        $data = [
            'locations' => $locations
        ];

        return view('admin.image', $data);
    }
    public function postAdd(Request $request){
        $img = new Image;
//        dd($request->space_image)
        $img->url = saveImage([$request->url],400,'public/home/image');
        $img->location_id = $request->location_id;
        $img->save();
        return back();
    }

    public function getDelete($id){
        $strImage = Image::find($id)->url;
        $arrImage = explode(',',$strImage);
        foreach($arrImage as $image){
            File::delete('local/storage/app/public/home/image/'.$image,'local/storage/app/public/home/image/resized-'.$image);
        }
        Image::destroy($id);
        return back();
    }
}
