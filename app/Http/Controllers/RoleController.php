<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoleController extends Controller
{
    //dashboard
    public function dashboard()
    {
        if(Auth::user()->role == 'admin'){
            return view('admin.user');
        }elseif(Auth::user()->role == 'merchant_owner'){
            return redirect()->route('merchant_owner#home');
        }elseif(Auth::user()->role == 'site_owner'){
            return redirect()->route('site_owner#home');
        }elseif(Auth::user()->role == 'site_staff'){
            return redirect()->route('site_staff#home');
        }else{
            return redirect()->route('member#home');
        }
    }
}
