<?php

namespace App\Http\Controllers\Pub;

use App\Models\Content;
use App\Models\Location;
use App\Models\Meeting;
use App\Models\Member;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Pack;
use App\Models\Register;
use App\Models\About;
use App\Models\Banner;
use App\Models\News;
use App\Models\Virtual;
use App\Models\Service;
use App\Models\Advice;
use App\Models\Space;
use App\Models\ServiceContent;
use Mail;

class IndexController extends Controller
{
    public function getHome(){
        $data['packs'] = Pack::all();
        $data['banners'] = Banner::where('banner_position', Banner::POSITION_HOME)->get();
        $data['spaces6'] = Space::paginate(6);
        $data['spaces'] = Space::all();
        $data['content'] = Content::find(1);
        return view('public.home',$data);
    }

    public function getAboutUs(){
        $data['story'] = About::where('about_name','story')->first();
        $data['view'] = About::where('about_name','view')->first();
        $data['value'] = About::where('about_name','value')->first();
        $data['banners'] = Banner::where('banner_position', Banner::POSITION_HOME)->get();
        $data['about1'] = Banner::where('banner_position', Banner::POSITION_ABOUT_1)->first();
        $data['about2'] = Banner::where('banner_position', Banner::POSITION_ABOUT_2)->inRandomOrder()->first();

        return view('public.about',$data);
    }

    public function getNews(){
        $data['first_news'] = News::orderBy('news_id','desc')->first();
        $data['news_list'] = News::where('news_id','<>',$data['first_news']->news_id)->orderBy('news_id','desc')->paginate(3);
        $data['banners'] = Banner::where('banner_position', Banner::POSITION_HOME)->get();
        return view('public.news',$data);
    }
    public function getNewsDetail($slug){
        $data['news'] = News::where('news_slug',$slug)->first();
        $data['news_list'] = News::where('news_id','<>',$data['news']->news_id)->orderBy('news_id','desc')->paginate(3);
        $data['banners'] = Banner::where('banner_position', Banner::POSITION_HOME)->get();
        return view('public.news-detail',$data);
    }

    public function getMeetingRoom(){
        $data['banners'] = Banner::where('banner_position', Banner::POSITION_HOME)->get();
        $data['location'] = Location::all();
        $data['content'] = Content::find(8);

        $data['meeting'] = Meeting::all();
        return view('public.meetingroom',$data);
    }

    public function getPack(){
        $data['packs'] = Pack::all();
        $data['banners'] = Banner::where('banner_position', Banner::POSITION_HOME)->get();
        $data['location'] = Location::all();
        $data['content'] = Content::find(7);
        return view('public.pack',$data);
    }

    public function getService(){
        $data['services'] = Service::all();
        $data['advices'] = Advice::all();
        $data['service_content'] = ServiceContent::find(1);
        $data['advice_content'] = ServiceContent::find(2);
        $data['banners'] = Banner::where('banner_position', Banner::POSITION_HOME)->get();
//        $data['location'] = Location::all();
        $data['virtual'] = Content::find(2);
        $data['pack'] = Content::find(3);
        $data['meeting'] = Content::find(4);
        return view('public.service',$data);
    }

    public function getVirtualRoom(){
        $data['services'] = Service::all();
        $data['advices'] = Advice::all();
        $data['service_content_left'] = ServiceContent::find(1);
        $data['service_content_right'] = ServiceContent::find(2);
        $data['service_content_bot'] = ServiceContent::find(3);
        $data['advice_content_left'] = ServiceContent::find(5);
        $data['advice_content_right'] = ServiceContent::find(6);
        $data['advice_content_bot'] = ServiceContent::find(7);

        $data['standard'] = Virtual::find(1);
        $data['premium'] = Virtual::find(2);
        $data['banners'] = Banner::where('banner_position', Banner::POSITION_HOME)->get();
        $data['location'] = Location::all();

        $data['content1'] = Content::find(5);
        $data['content2'] = Content::find(6);

        $data['virtual1'] = Banner::where('banner_position', Banner::POSITION_VIRTUAL_1)->first();
        return view('public.virtual',$data);
    }

    public function getCommunity(){
        $data['banners'] = Banner::where('banner_position', Banner::POSITION_HOME)->get();
        $data['ceo'] = Member::where('ceo', 1)->first();
        $data['member'] = Member::where('ceo', 0)->get();
        $data['content1'] = Content::find(9);
        $data['content2'] = Content::find(10);

        return view('public.community',$data);
    }

    public function getExperience(){
        $data['banners'] = Banner::where('banner_position', Banner::POSITION_HOME)->get();
        $data['location'] = Location::all();
        return view('public.experience', $data);
    }

    public function postRegister(Request $request){
        $register = new Register;
        $register->register_name = $request->name;
        $register->register_email = $request->email;
        $register->register_phone = $request->phone;
        $register->register_service = $request->service;
        $register->register_location = $request->location;
        $register->save();

        Mail::send('mail.confirm', array('name'=>$register->register_name), function($message) use ($register){
            $message->to($register->register_email,  $register->register_name)->subject('Zikzak confirmation!');
        });
        return back()->with('success','modal');
    }
}