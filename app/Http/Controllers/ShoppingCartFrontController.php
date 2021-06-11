<?php

namespace App\Http\Controllers;

use App\Product;
use Darryldecode\Cart\Cart;
use Illuminate\Http\Request;

class ShoppingCartFrontController extends Controller
{
    //
    public function add(Request $request)
    {
        $product = Product::find($request->productId);
        // 新增一筆產品至購物車
        // array format
        if($product){
            \Cart::add(array(
                'id' => $product->id,    // 商品id必須唯一
                'name' => $product->name,    // 商品名稱
                'price' => $product->price,    // 商品價格
                'quantity' => 1,    // 商品數量
                'attributes' => array(
                    'img'=>$product->img
                ),    // 自定義參數
            ));
            return 'success';
        }else{
            return 'fail';
        }

    }


    public function update(Request $request)
    {
        if($request->productId){
            \Cart::update($request->productId,array(
                'quantity' => $request->qty,
            ));

            $product = \Cart::get($request->productId);
            
            return $product->quantity;

        }else{

            return 'fail';
            
        }
        
    }

    

    public function content()
    {
        // 查看購物車現有內容
        $cartCollection = \Cart::getContent();
        dd($cartCollection);
    }


    public function list()
    {
        $cartCollection = \Cart::getContent();
        return view('ShoppingCart.shopping_list_1_page',compact('cartCollection'));
    }
    
    public function payment()
    {
        // \Cart::clear();
        // 購物車空車
        if (\Cart::isEmpty()){
            return redirect('/product')
            ->with('icon','warning')        
            ->with('title','結帳失敗')        
            ->with('text','請先選購商品!!');        
        }else{
            // 購物車有商品
            $cartCollection = \Cart::getContent();
            return view('ShoppingCart.shopping_payment_2_page',compact('cartCollection'));
        }
        
    }





    


    


}
