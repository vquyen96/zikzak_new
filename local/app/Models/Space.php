<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Space extends Model
{
    //
    protected $table = 'spaces';
    protected $primaryKey = 'space_id';
    protected $guarded = [];
}
