<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(){
        $products=Product::skip(0)->take(6)->get();
        return view('frontend.product',compact('products'));
    }
}
