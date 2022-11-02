<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
 use Auth;

class Dashboardcontroller extends Controller
{

// 	public function __construct()
// {
//     $this->middleware('auth');
// }

    

    public function index(){
        return view('admin.dashboard');
    }
}
