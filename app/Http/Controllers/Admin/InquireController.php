<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Kewu;
use App\Yewu;
use App\Meeting;

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
    		$where[]=['kewu.y_id','=',$yewu];
    	}
    	$kewuInfo=Kewu::join('yewu','kewu.y_id','=','yewu.y_id')->where($where)->paginate(3);
    	$yewuInfo=Yewu::get();
    	if(request()->ajax()){
    		return view('admin/inquire/ajax',['kewuInfo'=>$kewuInfo,'yewuInfo'=>$yewuInfo,'name'=>$name,'level'=>$level,'hang'=>$hang,'lai'=>$lai,'yewu'=>$yewu]);
    	}
    	return view('admin/inquire/inquire',['kewuInfo'=>$kewuInfo,'yewuInfo'=>$yewuInfo,'name'=>$name,'level'=>$level,'hang'=>$hang,'lai'=>$lai,'yewu'=>$yewu]);
    }

    public function meeting(){
    	$y_id=request()->yewu;
    	$k_id=request()->kewu;
    	$where=[];
    	if(!empty($y_id)){
    		$where[]=['meeting.y_id','=',$y_id];
    	}
    	if(!empty($k_id)){
    		$where[]=['meeting.k_id','=',$k_id];
    	}
    	$meeting=Meeting::leftjoin('kewu','kewu.k_id','=','meeting.k_id')->leftjoin('yewu','yewu.y_id','=','meeting.y_id')->where($where)->paginate(3);
    	$kewu=Kewu::get();
    	$yewu=Yewu::get();
    	if(request()->ajax()){
    		return view('admin/inquire/majax',['meeting'=>$meeting,'kewu'=>$kewu,'yewu'=>$yewu,'k_id'=>$k_id,'y_id'=>$y_id]);
    	}
    	return view('admin/inquire/meeting',['meeting'=>$meeting,'kewu'=>$kewu,'yewu'=>$yewu,'k_id'=>$k_id,'y_id'=>$y_id]);
    }
}
