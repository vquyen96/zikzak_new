<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Banner;
use File;

class BannerController extends Controller
{
	public function getBanner(){
		$data['banners'] = Banner::all();
		return view('admin.banner',$data);
	}

	public function postEditBanner($id, Request $request){
		$banner = Banner::find($id);
		$banner->banner_head1 = $request->banner_head1;
		$banner->banner_head2 = $request->banner_head2;
        $banner->banner_position = $request->banner_position;
        $banner->banner_description = $request->banner_description;
		
		if( $request->has('banner_image') ){
			foreach( explode(',',$banner->banner_image) as $image ){
				File::delete('local/storage/app/public/home/image/'.$image,'local/storage/app/public/home/image/resized-'.$image);
			}

			$banner->banner_image = saveImage([$request->banner_image],100,'public/home/image');
		}
		
		$banner->save();
		return back();
	}

	public function postAddBanner(Request $request){
		$banner = new Banner;
		$banner->banner_head1 = $request->banner_head1;
		$banner->banner_head2 = $request->banner_head2;
		$banner->banner_description = $request->banner_description;
		$banner->banner_position = $request->banner_position;
		$banner->banner_image = saveImage([$request->banner_image],100,'public/home/image');
		$banner->save();
		return back();
	}
}
