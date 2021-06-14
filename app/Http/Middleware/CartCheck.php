<?php

namespace App\Http\Middleware;

use Closure;
use Darryldecode\Cart\Cart;
use App\Http\Controllers\ProductToolBoxController;

class CartCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (\Cart::isEmpty()){
            return redirect('/product')
            ->with(ProductToolBoxController::swal('warning','結帳失敗','請選擇商品後結帳!!'));  
        }else{
            return $next($request);    
        }
    }
}
