<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Yewu;

class YewuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $y_name = request()->y_name;
        $where = [];
        if($y_name){
            $where[] = ['y_name','like',"%$y_name%"];
        }
        // dd($y_name);
        $pageSize = config('app.pageSize');
        $ye =  Yewu::orderBy('y_id','desc')->where($where)->paginate($pageSize);
        //  dd($ye);
        // ajax方法判断
        // dd(request()->ajax());
        if(request()->ajax()){
            return view('admin.yewu.ajax',['ye'=>$ye,'y_name'=>$y_name]);
        }

         return view('admin.yewu.index',['ye'=>$ye,'y_name'=>$y_name]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.yewu.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = request()->except(['_token','/yewu/store']);
        //    dd($post);
        
        //添加
        $res = Yewu::create($post);
        // dd($res);
        if($res){
            return redirect('/yewu');
        } 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ye = Yewu::find($id);
        return view('admin.yewu.edit',['ye'=>$ye]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $post = request()->except(['_token','/yewu/update'.$id]);
        // dd($post);
        $res = Yewu::where('y_id',$id)->update($post); 
        // dd($res);
        if($res!==false){
            return redirect('/yewu');
        }
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // dd(1234);
        // $desc = Yewu::where('y_id','=',$id)->delete();
        // // dd($desc);
        // if($desc){
        //     return redirect('/yewu');
        // }

        $post = Yewu::where("y_id","=",$id)->delete();
        if($post){
            return redirect("/yewu");
        }

        // $res = Yewu::delete($id);
        // dd($res);
        // if($res){
        //     return redirect('/yewu');
        // }
    }
}
