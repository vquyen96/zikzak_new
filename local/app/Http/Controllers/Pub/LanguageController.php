<?php

namespace App\Http\Controllers\Pub;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LanguageController extends Controller
{
	public function setLocale($locale){
		Session::put('locale', $locale);
		return redirect()->back();
	}
}
