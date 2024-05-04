<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminAuth extends Controller
{
    function showLogin(){

        return view('Admin.Auth.login', ['title'=>'Admin']);
    }

    public function doLogin(Request $req){
        $req->validate([
            'username'=>'required|string|min:2|max:20',
            'password'=>'required|min:3|max:20'
        ]);
        $crds = [
            'username'=>$req->username,
            'password'=>$req->password,
        ];
        if (Auth::guard('admin')->attempt($crds)){
            return redirect()->route('admin.Item.showAll');
        }else{
            return redirect()->route('admin.showLogin');
        }
    }

    public function logout(){
        Auth::guard('admin')->logout();
        return redirect()->route('admin.showLogin');
    }
}
