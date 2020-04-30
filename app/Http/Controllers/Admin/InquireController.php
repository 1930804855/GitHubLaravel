<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Kewu;
use App\Yewu;

class InquireController extends Controller
{
    public function index(){
    	$name=request()->name;
    	$level=request()->level;
    	$hang=request()->hang;
    	$lai=request()->lai;
    	$yewu=request()->yewu;
    	$where=[];
    	if(!empty($name)){
    		$where[]=['k_name','like',"%$name%"];
    	}
    	if(!empty($level)){
    		$where[]=['k_level','like',"%$level%"];
    	}
    	if(!empty($hang)){
    		$where[]=['k_hang','like',"%$hang%"];
    	}
    	if(!empty($lai)){
    		$where[]=['k_lai','like',"%$lai%"];
    	}
    	if(!empty($yewu)){
    		$where[]=['kewu.y_id','like',"%$yewu%"];
    	}
    	$kewuInfo=Kewu::join('yewu','kewu.y_id','=','yewu.y_id')->where($where)->paginate(3);
    	$yewuInfo=Yewu::get();
    	if(request()->ajax()){
    		return view('admin/inquire/ajax',['kewuInfo'=>$kewuInfo,'yewuInfo'=>$yewuInfo,'name'=>$name,'level'=>$level,'hang'=>$hang,'lai'=>$lai,'yewu'=>$yewu]);
    	}
    	return view('admin/inquire/inquire',['kewuInfo'=>$kewuInfo,'yewuInfo'=>$yewuInfo,'name'=>$name,'level'=>$level,'hang'=>$hang,'lai'=>$lai,'yewu'=>$yewu]);
    }
}
