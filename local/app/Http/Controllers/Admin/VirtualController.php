<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Virtual;

class VirtualController extends Controller
{
    //
	public function getVirtual(){
		$data['standard'] = Virtual::find(1);
		$data['premium'] = Virtual::find(2);
		return view('admin.virtual',$data);
	}

	public function postEditStandard(Request $request){
		$standard = Virtual::find(1);
		$standard->virtual_name = $request->virtual_name;
		$standard->virtual_location = $request->virtual_location;
		$standard->virtual_price = $request->virtual_price;
		$standard->virtual_trade_adr = $request->virtual_trade_adr ?? 0;
		$standard->virtual_regis_adr = $request->virtual_regis_adr ?? 0;
		$standard->virtual_parcel = $request->virtual_parcel ?? 0;
		$standard->virtual_recept = $request->virtual_recept ?? 0;
		$standard->virtual_work = $request->virtual_work;
		$standard->virtual_meeting_room = $request->virtual_meeting_room;
		$standard->virtual_drink = $request->virtual_drink ?? 0;
		$standard->virtual_photo = $request->virtual_photo;
		$standard->virtual_bill = $request->virtual_bill ?? 0;
		$standard->virtual_sanitary = $request->virtual_sanitary ?? 0;
		$standard->virtual_guard = $request->virtual_guard ?? 0;
		$standard->virtual_nameboard = $request->virtual_nameboard ?? 0;
		$standard->virtual_advice = $request->virtual_advice ?? 0;
		$standard->save();
		return back();
	}
	public function postEditPremium(Request $request){
		$premium = Virtual::find(2);
		$premium->virtual_name = $request->virtual_name;
		$premium->virtual_location = $request->virtual_location;
		$premium->virtual_price = $request->virtual_price;
		$premium->virtual_trade_adr = $request->virtual_trade_adr ?? 0;
		$premium->virtual_regis_adr = $request->virtual_regis_adr ?? 0;
		$premium->virtual_parcel = $request->virtual_parcel ?? 0;
		$premium->virtual_recept = $request->virtual_recept ?? 0;
		$premium->virtual_work = $request->virtual_work;
		$premium->virtual_meeting_room = $request->virtual_meeting_room;
		$premium->virtual_drink = $request->virtual_drink ?? 0;
		$premium->virtual_photo = $request->virtual_photo;
		$premium->virtual_bill = $request->virtual_bill ?? 0;
		$premium->virtual_sanitary = $request->virtual_sanitary ?? 0;
		$premium->virtual_guard = $request->virtual_guard ?? 0;
		$premium->virtual_nameboard = $request->virtual_nameboard ?? 0;
		$premium->virtual_advice = $request->virtual_advice ?? 0;
		$premium->save();
		return back();

	}
}