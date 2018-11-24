<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Pack;
use Illuminate\Support\Facades\File;

class PackController extends Controller
{
    public function getPack(){
        $data['pack1'] = Pack::where('pack_id',1)->first();
        $data['pack2'] = Pack::where('pack_id',2)->first();
        $data['pack3'] = Pack::where('pack_id',3)->first();
        $data['pack4'] = Pack::where('pack_id',4)->first();
        return view('admin.pack',$data);
    }

    public function postEditPack1(Request $request){
        $pack1 = Pack::where('pack_id',1)->first();
        $pack1->pack_name = $request->pack_name;
        $pack1->pack_price = $request->pack_price;
        $pack1->pack_summary = $request->pack_summary;
        $pack1->pack_detail = $request->pack_detail;
        $pack1->facility = implode('|', array_merge( $request->facility ) ) ;

        if( $request->has('pack_image') ){
            File::delete('local/storage/app/public/pack/image/'.$pack1->pack_image,'local/storage/app/public/pack/image/resized-'.$pack1->pack_image);

            $pack1->pack_image = saveImage([$request->pack_image],700,'public/pack/image');
        }

        $pack1->save();
        return back();
    }

    public function postEditPack2(Request $request){
        $pack1 = Pack::where('pack_id',2)->first();
        $pack1->pack_name = $request->pack_name;
        $pack1->pack_price = $request->pack_price;
        $pack1->pack_summary = $request->pack_summary;
        $pack1->pack_detail = $request->pack_detail;
        $pack1->facility = implode('|', array_merge( $request->facility ) ) ;
        if( $request->has('pack_image') ){
            File::delete('local/storage/app/public/pack/image/'.$pack1->pack_image,'local/storage/app/public/pack/image/resized-'.$pack1->pack_image);

            $pack1->pack_image = saveImage([$request->pack_image],700,'public/pack/image');
        }

        $pack1->save();
        return back();
    }

    public function postEditPack3(Request $request){
        $pack1 = Pack::where('pack_id',3)->first();
        $pack1->pack_name = $request->pack_name;
        $pack1->pack_price = $request->pack_price;
        $pack1->pack_summary = $request->pack_summary;
        $pack1->pack_detail = $request->pack_detail;
        $pack1->facility = implode('|', array_merge( $request->facility ) ) ;
        if( $request->has('pack_image') ){
            File::delete('local/storage/app/public/pack/image/'.$pack1->pack_image,'local/storage/app/public/pack/image/resized-'.$pack1->pack_image);

            $pack1->pack_image = saveImage([$request->pack_image],700,'public/pack/image');
//            dd($pack_image);
        }

        $pack1->save();
        return back();

    }

    public function postEditPack4(Request $request){
        $pack1 = Pack::where('pack_id',4)->first();
        $pack1->pack_name = $request->pack_name;
        $pack1->pack_price = $request->pack_price;
        $pack1->pack_summary = $request->pack_summary;
        $pack1->pack_detail = $request->pack_detail;
        $pack1->facility = implode('|', array_merge( $request->facility ) ) ;
        if( $request->has('pack_image') ){
            File::delete('local/storage/app/public/pack/image/'.$pack1->pack_image,'local/storage/app/public/pack/image/resized-'.$pack1->pack_image);

            $pack1->pack_image = saveImage([$request->pack_image],700,'public/pack/image');
        }

        $pack1->save();
        return back();
    }
}
