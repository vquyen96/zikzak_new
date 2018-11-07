<?php

namespace App\Http\Controllers\Admin;

use App\Models\Location;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LocationController extends Controller
{
    public function getList(){
        $data['items'] = Location::all();
        return view('admin.location', $data);

    }
    public function getAdd(){
        Location::create();
        return back();
    }
    public function postEdit(Request $request, $id){
        $data = $request->all();
        $location = Location::find($id);
        $location->update($data);
        return back();
    }
    public function getDelete($id){
        Location::destroy($id);
        return back();
    }
}
