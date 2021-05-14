<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $newData = Product::get();
        return view('products.index',compact('newData'));
    }
}
