<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Yewu extends Model
{
    protected $table = 'yewu';
    protected $primaryKey = 'y_id';
    public $timestamps = false;
    //黑名单
    protected $guarded = [];
}
