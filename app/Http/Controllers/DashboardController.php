<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    
    public function read(Request $request)
    {
        if(Auth::user()->role == 1){
            return view('dashboard.admin');
        }
        else{
            return view('dashboard.user');
        }
        
    }

    
}
