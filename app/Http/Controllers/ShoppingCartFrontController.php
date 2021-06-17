<?php

namespace App\Http\Controllers;

use App\Order;
use App\Product;
use App\OrderDetail;
use App\OrderStatus;
use App\ShippingStatus;
use Darryldecode\Cart\Cart;
use Illuminate\Http\Request;
use TsaiYiHua\ECPay\Checkout;
use CreateShippingStatusTable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use TsaiYiHua\ECPay\Services\StringService;
use TsaiYiHua\ECPay\Collections\CheckoutResponseCollection;

class ShoppingCartFrontController extends Controller
{
    // 綠界金流

    public function __construct(Checkout $checkout,CheckoutResponseCollection $checkoutResponse)
    {
    $this->checkout = $checkout;
    $this->checkoutResponse = $checkoutResponse;
    }

    // 綠界金流




    // 購物車 增刪查改
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
        $qty = intval($request->qty) < 1 ? 1 : $request->qty;

        if($request->productId){
            \Cart::update($request->productId,array(
                'quantity' => array(
                    'relative' => false,
                    'value' => $qty
                ),
            ));

            $product = \Cart::get($request->productId);
            
            return $product->quantity;

        }else{

            return 'fail';
            
        }
        
    }


    public function delete(Request $request)
    {
        if($request->productId){
            \Cart::remove($request->productId);
            return 'success';
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


    // 購物車 顯示頁面
    public function list()
    {
        $cartCollection = \Cart::getContent()->sortBy('id');
        return view('ShoppingCart.shopping_list_1_page',compact('cartCollection'));
    }
    
    public function payment()
    {
        $cartCollection = \Cart::getContent();
        return view('ShoppingCart.shopping_payment_2_page',compact('cartCollection'));
    }

    public function paymentCheck(Request $request)
    {
        Session::put('payment',$request->payment);
        Session::put('shipment',$request->shipment);

        return view('ShoppingCart.shopping_information_3_page');
    }

    public function informationCheck(Request $request)
    {

        $user = Auth::user();

        $shipping_status = ShippingStatus::orderBy('sort','asc')->first();
        $order_status = OrderStatus::orderBy('sort','asc')->first();
        $order = Order::create([
            'user_id'=>$user->id,
            'order_no'=>'DP'.time().rand(1,99999),
            'name'=>$request->name,
            'phone'=>$request->phone,
            'email'=>$request->email,
            'county'=>$request->county,
            'district'=>$request->district,
            'zipcode'=>$request->zipcode,
            'address'=>$request->address,
            'price'=>9999999999,
            'pay_type'=>Session::get('payment'),
            'shipping'=>Session::get('shipment'),
            'shipping_fee'=>99999999999,
            'shipping_status_id'=>$shipping_status->id,
            'order_status_id'=>$order_status->id,
            'remark'=>'',
        ]);

        $subPrice = 0;
        $cartData = \Cart::getContent();

        // items 提供給金流商顯示商品
        $items=[];


        foreach($cartData as $data){
            $productId = $data->id;
            $product = Product::find($productId);
            $subPrice += $data->quantity * $product->price;
            OrderDetail::create([
                'order_id'=>$order->id,
                'product_id'=>$product->id,
                'qty'=>$data->quantity,
                'old'=>$product->tojson()
            ]);

            $new_ary = [
                'name'=>$product->name,
                'qty'=>$data->quantity,
                'price'=>$product->price,
                'unit'=> '個'
            ];

            array_push($items, $new_ary);
            
        }
        
        $fee = $subPrice > 1000000 ? 0 : 600;
        $order->update([
            'price'=>$subPrice + $fee,
            'shipping_fee'=>$fee,
        ]);


        // dd($order);



        // 第三方支付
        $formData = [
            'UserId' => $order->user_id, // 用戶ID , Optional
            'ItemDescription' => '產品簡介',
            'Items' => $items,
            'OrderId' => $order->order_no,
            'TotalAmount' => $order->price,
            'PaymentMethod' => 'Credit', // ALL, Credit, ATM, WebATM
        ];
    
        //清空購物車
        \Cart::clear();
        
        
        return $this->checkout->setNotifyUrl(route('notify'))->setReturnUrl(route('return'))->setPostData($formData)->send();
    }



    // 綠界金流

    public function notifyUrl(Request $request)
    {
        $serverPost = $request->post();
        $checkMacValue = $request->post('CheckMacValue');
        unset($serverPost['CheckMacValue']);
        $checkCode = StringService::checkMacValueGenerator($serverPost);
        if ($checkMacValue == $checkCode) {
            return '1|OK';
        } else {
            return '0|FAIL';
        }
    }


    public function returnUrl(Request $request)
    {
        $serverPost = $request->post();
        $checkMacValue = $request->post('CheckMacValue');
        unset($serverPost['CheckMacValue']);
        $checkCode = StringService::checkMacValueGenerator($serverPost);
        if ($checkMacValue == $checkCode) {
            if (!empty($request->input('redirect'))) {
                return redirect($request->input('redirect'));
            } else {

                //付款完成，下面接下來要將購物車訂單狀態改為已付款
                //目前是顯示所有資料將其DD出來
                dd($this->checkoutResponse->collectResponse($serverPost));
            }
        }
    }

    // 綠界金流






    


    


}
