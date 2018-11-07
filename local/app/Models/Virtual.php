<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Virtual extends Model
{
    //
    protected $table = 'virtuals';
    protected $primaryKey = 'virtual_id';
    protected $guarded = [];
}
