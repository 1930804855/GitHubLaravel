<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Yewu;
use App\Kewu;
use App\Meeting;
class MeetingController extends Controller
{
    /**
     * Display a listing of the resource.
     *展示
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //查询访问数据
        $data=Meeting::leftjoin('kewu','meeting.k_id','=','kewu.k_id')
                     ->leftjoin('yewu','meeting.y_id','=','yewu.y_id')
                     ->paginate(3);
        // dd($data);
        return view('admin.meeting.index',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *添加
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        // 查询业务员信息
        $yewuData=Yewu::all();
        // dd($yewuData);
        return view('admin.meeting.create',['yewuData'=>$yewuData]);
    }
    public function getCustome($id){
        $where=[
            ['y_id','=',$id]
        ];
        $kewuData=Kewu::where($where)->get();
        // dd($kewuData);
        $data='';
        foreach($kewuData as $k=>$v){
            $data.= "<option value='".$v->k_id."'>".$v->k_name."</option>";
        }
        return $data;

    }
    

    /**
     * Store a newly created resource in storage.
     *执行添加
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //获取提交数据
        $data=$request->except('_token');
        // dd($data);
        $res=Meeting::insert($data);
        // dd($res);
        if($res){
            return redirect('/meeting');
        }

    }

    /**
     * Display the specified resource.
     *详情
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *更新
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $data=Meeting::where('m_id',$id)->first();
        $yewuData=Yewu::all();
        // dd($yewuData);
        // dd($data);
        // 获取客户数据
        $kewuData=Kewu::all();
        return view('admin.meeting.edit',['data'=>$data,'yewuData'=>$yewuData,'KewuData'=>$kewuData]);
    }

    /**
     * Update the specified resource in storage.
     *执行更新
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //获取提交数据
        // dd($id);
        $data=$request->except('_token');
        // dd($data);
        
        $res=Meeting::where('m_id',$id)->update($data);
        // dd($res);
        if($res!==false){
            return redirect('/meeting');
        }
    }

    /**
     * Remove the specified resource from storage.
     *删除
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $res=Meeting::where('m_id',$id)->delete();
        if($res){
            return redirect('/meeting');
        }
    }
}
