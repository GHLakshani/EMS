<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Admin;
use App\employee;
use App\department;

class HomeController extends Controller
{
    function login(){
        return view('login');
    }

    function submit_login(Request $request){
        $request->validate{[
            'username'=>'required',
            'password'=>'required'
        ]};

        $userCheck=Admin::where(['username'=>$request->username,'password'=>$request->password])->count();
        if($userCheck>0){
            return redirect('dashboard');
        }
        else{
            return redirect('/')->with('error','Invalid Username or Password!');
        }

    }

    function dashboard(){
        return view('dashboard');
        $employee=employee::orderBy('id','desc')->get();
        $department=department::orderBy('id','desc')->get();
        return view('backend.dashboard',['employee'=>$employee,'department'=>$department]);
    }
}
