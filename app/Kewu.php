<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kewu extends Model
{
    protected $table = 'kewu';
    protected $primaryKey = 'k_id';
    public $timestamps = false;
    //黑名单
    protected $guarded = [];
}
