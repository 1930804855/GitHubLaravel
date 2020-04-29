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

	}

}
