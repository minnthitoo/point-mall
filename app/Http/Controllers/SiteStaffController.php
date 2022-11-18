<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteStaffController extends Controller
{
    //home
    public function home()
    {
        return view('site_staff.home');
    }
}
