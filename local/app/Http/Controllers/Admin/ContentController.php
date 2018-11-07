<?php

namespace App\Http\Controllers\Admin;

use App\Models\Content;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContentController extends Controller
{
    public function getList(){
        $data['items'] = Content::orderByDesc('id')->get();
        return view('admin.content', $data);
    }
    public function getAdd(){
        Content::create();
        return back();
    }
    public function postEdit(Request $request, $id){

        $data = $request->all();
        $content = Content::find($id);
        $content->update($data);
        return back();
    }

    public function getDelete($id){
        Content::destroy($id);
        return back();
    }
}
