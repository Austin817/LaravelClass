<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductFrontController extends Controller
{
    public function index()
    {
        $productsData = Product::get();
        return view('products.index',compact('productsData'));
    }
}
