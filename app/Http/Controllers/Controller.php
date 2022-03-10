<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;

class Controller extends BaseController
{
    public function dashboard()
    {
        if(isset($_POST['filter_btn']))
        {
            print_r($request->input());die;
        }
    	$products = Product::where("is_del",0)->get();
    	return view('pages/orders',[
    		"products" => $products
    	]);
    }
    public function filterOrder(Request $request)
    {
        $request->validate([
            "start_date" => 'required',
            "end_date" => 'required',
        ]);

        $products = Product::whereBetween("created_at",[$request->start_date." 00:00:00", $request->end_date." 23:59:59"])->get();
        return view('pages/orders',[
            "products" => $products
        ]);
    }
    public function productStatus($id)
    {
    	Product::where('id',$id)->update(['status'=>1]);
    	return back();
    }
}
