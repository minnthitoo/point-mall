<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MerchantOwnerController extends Controller
{
    //home
    public function home()
    {
        return view('merchant_owner.home');
    }
}
