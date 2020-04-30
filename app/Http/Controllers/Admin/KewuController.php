<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Kewu;
use App\Yewu;
class KewuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   $pageSize = config('app.pageSize'); 
        $KewuInfo = Kewu::join('yewu','kewu.y_id','=','yewu.y_id')->paginate($pageSize);
        return view('admin.kewu.index',['KewuInfo'=>$KewuInfo]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $yewu = Yewu::all();
        return view('admin.kewu.create',['yewu'=>$yewu]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = request()->except('_token');
        $res = Kewu::create($post);
    
        if($res){
            return redirect('/kewu');
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
        $yewu = Yewu::all();
        $KewuInfo = Kewu::join('yewu','kewu.y_id','=','yewu.y_id')->find($id);
        return view('admin.kewu.edit',['yewu'=>$yewu,'KewuInfo'=>$KewuInfo]);
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
        $post = $request->except('_token');
        $res = Kewu::where('k_id',$id)->update($post);

        if($res!==false){
            return redirect('/kewu');
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
        $res = Kewu::destroy($id);
        if($res){
            return redirect('/kewu');  
        }
    }
}
