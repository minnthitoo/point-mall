<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MemberController extends Controller
{
    //home
    public function home()
    {
        return view('member.home');
    }
}
