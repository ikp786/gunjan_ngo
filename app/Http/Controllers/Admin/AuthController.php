<?php

namespace App\Http\Controllers\Admin;
use Auth;
Use Redirect;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    //


    public function signIn(){
        return view('admin.login.login');
    }

    public function loginUser(REQUEST $request){
    	// dd($request->all()); die;


    	if (Auth::attempt(['email' => $request->email, 'password' => $request->password])){


    		Redirect::to('admin/dashboard')->send()->with('success','Login Succesfully');
    	}
    	else{
    		// echo "aaaaaaaaaaa";die;
    		Redirect::to('admin/login/login')->send()->with('failure','Something wrnt wrong');
    	}
    }
}
