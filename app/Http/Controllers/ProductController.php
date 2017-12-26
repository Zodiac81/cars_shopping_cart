<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ProductController extends Controller
{
    public function getIndex()
    {
        $product_list = Product::all();
        return view('shop.index',['products'=>$product_list]);
    }

    public function getAddToCart(Request $request, $id){
        $product = Product::find($id);
        $oldCart = Session::has('cart')? Session::get('cart') : null;

        $cart = new Cart($oldCart);
        $cart->add($product, $product->id);

        $request->session()->put('cart', $cart);
        dd($request->session()->get('cart'));
        return redirect()->route('product.index');


    }
}
