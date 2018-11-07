<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\News;
use File;

class NewsController extends Controller
{
    public function getNews(){
        $data['news_list'] = News::orderBy('news_id','desc')->get();
        return view('admin.news.news',$data);
    }
    public function getAddNews(){
        return view('admin.news.news-add');
    }
    public function postAddNews(Request $request){
        $news = new News;
        $news->news_name = $request->news_name;
        $news->news_slug = str_slug($request->news_name);
        $news->news_summary = $request->news_summary;
        $news->news_content = $request->news_content;
        $news->news_image = saveImage($request->news_image,260,'public/news/image');
        $news->tag = $request->tag;
        $news->save();
        return redirect('admin/news');
    }
    public function getEditNews($id){
        $data['news'] = News::find($id);
        return view('admin.news.news-edit',$data);
    }
    public function postEditNews($id, Request $request){
        $news = News::find($id);
        $news->news_name = $request->news_name;
        $news->news_slug = str_slug($request->news_name);
        $news->news_summary = $request->news_summary;
        $news->news_content = $request->news_content;
        if( $request->has('news_image') ){

            foreach( explode(',',$news->news_image) as $image ){
                File::delete('local/storage/app/public/news/image/'.$image,'local/storage/app/public/news/image/resized-'.$image);
            }

            $news->news_image = saveImage($request->news_image,260,'public/news/image');
        }
        $news->tag = $request->tag;
        $news->save();
        return redirect('admin/news');
    }
    public function getDeleteNews($id){
        $strImage = News::find($id)->news_image;
        $arrImage = explode(',',$strImage);
        foreach($arrImage as $image){
            File::delete('local/storage/app/public/news/image/'.$image,'local/storage/app/public/news/image/resized-'.$image);
        }
        News::destroy($id);
        return back();
    }
}
