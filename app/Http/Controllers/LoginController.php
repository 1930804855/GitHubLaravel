<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Admin;
class LoginController extends Controller
{

    public function login(){
		return view("login.login");
	}


	public function logindo(Request $request){
		// echo encrypt('123456');
		$login = $request->except("_token");
		// dd($login);
    	$adminuser = Admin::where('a_name',$login['a_name'])->first();
    	// dd($adminuser);
    	// dd($login['a_pwd']);
    	if(decrypt($adminuser->a_pwd)!=$login['a_pwd']){
    		return redirect("/login")->with('msg','用户名或密码不对！');
    	}
    	session(["adminuser"=>$adminuser]);

    	// 


    	return redirect("/admin");
	}


	// 管理员添加
	public function logincreate(){
		return view("login.logincreate");
	}
	// 管理员执行添加
	public function loginstroe(Request $request){
		// 接值
		$login = $request->except('_token');
		// dd(enctype($login['a_pwd']));
		// dd($login);
		$login['a_pwd'] = encrypt($login['a_pwd']);
		// dd($login);
		$res = Admin::create($login);
		// dd($res);
		if($res){
			return redirect('/login');
		}
	}

	// 管理员列表
	public function loginindex(){
		$admin = Admin::all();
		// dd($admin);
		return view("login.loginindex",['admin'=>$admin]);
	}


	// 删除
	public function logindel($id){
		$res = Admin::where('a_id',$id)->delete();
        if($res){
            return redirect('/login/loginindex');
        }
	}


	 public function loginupd($id) {
        //修改第一个页面
        // 根据id获取记录信息
        $adminInfo = Admin::where('a_id',$id)->first();
        // $pwd = decrypt($adminInfo->a_pwd);
        return view("login.loginupd",['adminInfo'=>$adminInfo]);
    }

  
    public function loginupdate(Request $request, $id){
        // 接值
        $post = $request->except("_token");
        $res = Admin::where('a_id',$id)->update($post);
        if($res!==false){
            return redirect("/login/loginindex");
        }
    }




}
