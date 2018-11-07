<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\Advice;
use App\Models\ServiceContent;

class ServiceController extends Controller
{
    public function getService(){
    	$data['services'] = Service::all();
        $data['advices'] = Advice::all();
        $data['service_content_left'] = ServiceContent::find(1);
        $data['service_content_right'] = ServiceContent::find(2);
        $data['service_content_bot'] = ServiceContent::find(3);
    	$data['advice_content_left'] = ServiceContent::find(5);
    	$data['advice_content_right'] = ServiceContent::find(6);
    	$data['advice_content_bot'] = ServiceContent::find(7);
    	return view('admin.service',$data);
    }

    public function postServiceContent(Request $request){
    	$service_content = ServiceContent::find(1);
    	$service_content->content_content = $request->content_content_left;
    	$service_content->save();
        $service_content = ServiceContent::find(2);
        $service_content->content_content = $request->content_content_right;
        $service_content->save();
        $service_content = ServiceContent::find(3);
        $service_content->content_content = $request->content_content_bot;
        $service_content->save();
    	return back();
    }

    public function postAdviceContent(Request $request){
    	$advice_content = ServiceContent::find(5);
    	$advice_content->content_content = $request->content_content_left;
    	$advice_content->save();
    	$advice_content = ServiceContent::find(6);
    	$advice_content->content_content = $request->content_content_right;
    	$advice_content->save();
    	$advice_content = ServiceContent::find(7);
    	$advice_content->content_content = $request->content_content_bot;
    	$advice_content->save();

    	return back();
    }

    public function postEditService($id, Request $request){
    	$service = Service::find($id);
    	$service->service_name = $request->service_name;
    	$service->service_description = $request->service_description;
    	$service->service_price = $request->service_price;
    	$service->save();
    	return back();
    }

    public function postEditAdvice($id, Request $request){
    	$advice = Advice::find($id);
    	$advice->advice_name = $request->advice_name;
    	$advice->advice_description = $request->advice_description;
    	$advice->advice_price = $request->advice_price;
    	$advice->save();
    	return back();
    }
}
