<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Advice extends Model
{
    //
    protected $table = 'advices';
    protected $primaryKey = 'advice_id';
    protected $guarded = [];
}
