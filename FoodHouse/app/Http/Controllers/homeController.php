<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class homeController extends Controller
{
    public function index(){
        return view('home');
    }
    
    public function redirects(){

        $userType = Auth::user()->usertype;
        if($userType == '1'){
            return view('admin.adminHome');
        }else{
            return view('home');
        }
        
    }
}
