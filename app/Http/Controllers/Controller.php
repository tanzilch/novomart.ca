<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;

class Controller extends BaseController
{
    public function dashboard()
    {
    	return view('pages/dashboard');
    }
}
