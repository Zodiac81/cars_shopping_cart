<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Product;
use Illuminate\Http\Request;
use Session;

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
        //dd($request->session()->get('cart'));
        return redirect()->route('product.index');


    }

    public function getCart(){

        if(!Session::has('cart')){
            return view('shop.shopping-cart');
        }

        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        return view('shop.shopping-cart', ['products'=>$cart->items,'totalPrice'=>$cart->totalPrice]);

    }

    public function getCheckout(){

        if(!Session::has('cart')){
            return view('shop.shopping-cart');
        }

        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        $total = $cart->totalPrice;
        return view('shop.checkout',['total'=>$total]);
    }

    public function postCheckout(Request $request){
        // Set your secret key: remember to change this to your live secret key in production
        // See your keys here: https://dashboard.stripe.com/account/apikeys
        \Stripe\Stripe::setApiKey("sk_test_BA5vPObjv0ubeUxD8EymhZNK");
//dd($request->all());
        // Token is created using Checkout or Elements!
        // Get the payment token ID submitted by the form:
        $token = $request->stripeToken;
        //$cart = new Cart();
//dd(Session::get('cart'));
        // Charge the user's card:
        $charge = \Stripe\Charge::create(array(
            "amount" =>Session::get('cart')->totalPrice * 100,
            "currency" => "usd",
            "description" => "Example charge",
            "source" => $token,
        ));

        return redirect()->route('product.index');
    }
}
