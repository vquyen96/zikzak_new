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
	const POSITION_NEWS = 4;
	const POSITION_COMMUNITY = 5;
	const POSITION_TRY_IT = 6;
}
