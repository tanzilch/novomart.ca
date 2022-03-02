<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;

class ProductController extends BaseController
{
    public function showProducts()
    {
    	return view('pages/product/products');
    }
    public function showCart()
    {
        dd(Cart::content());
    }
    public function addToCart(Request $request)
    {
        extract($_POST);

    	$quantity = $original_quantity;

    	$vrfy = Cart::add($product_id, 'Product 1', $quantity, 995);

        if($vrfy)
        {
            return response()->json(['msg'=>'Added successfully','total_items'=>Cart::content()->count()]);
        }
        else
        {
            return response()->json(['msg'=>'Some error','total_items'=>Cart::content()->count()]);
        }
    }
    public function delFromCart(Request $request)
    {
    	$rowId = '468399581342505c47f4615b81bedaa9';
    	$cartItem = Cart::remove($rowId);

    	return redirect()->route('add.to.cart');die;
    }
}
