<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Meeting extends Model
{
    //
    protected $table="meeting";
    protected $primaryKey="m_id";
    public $timestamps = false;
    protected $guarded = [];
}
