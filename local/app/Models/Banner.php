<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    //
	protected $table = 'banners';
	protected $primaryKey = 'banner_id';
	protected $guarded = [];

	const POSITION_NULL = 0;
	const POSITION_HOME = 1;
	const POSITION_ABOUT = 2;
	const POSITION_SERVICE = 3;
    const POSITION_VIRTUAL = 4;
    const POSITION_PACK = 5;
    const POSITION_MEETING = 6;

	const POSITION_NEWS = 7;
	const POSITION_COMMUNITY = 8;
	const POSITION_TRY_IT = 9;

    const POSITION_ABOUT_1 = 10;
    const POSITION_ABOUT_2 = 11;
    const POSITION_VIRTUAL_1 = 12;


}
