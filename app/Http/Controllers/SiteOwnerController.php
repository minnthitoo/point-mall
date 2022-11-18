<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteOwnerController extends Controller
{
    //home
    public function home()
    {
        return view('site_owner.home');
    }
}
