<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function getIndex()
    {
        $product_list = Product::all();
        return view('shop.index',['products'=>$product_list]);
    }
}
