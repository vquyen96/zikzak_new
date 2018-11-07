<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\About;

class AboutController extends Controller
{
	public function getAbout(){
		$data['story'] = About::where('about_name','story')->first();
		$data['view'] = About::where('about_name','view')->first();
		$data['value'] = About::where('about_name','value')->first();
		return view('admin.about',$data);
	}
	public function postView(Request $request){
		$view = About::where('about_name','view')->first();
		$view->about_content = $request->view;
		$view->save();
		return back();
	}
	public function postValue(Request $request){
		$value = About::where('about_name','value')->first();
		$value->about_content = $request->value;
		$value->save();
		return back();
	}
	public function postStory(Request $request){
		$story = About::where('about_name','story')->first();
		$story->about_content = $request->story;
		$story->save();
		return back();
	}
}