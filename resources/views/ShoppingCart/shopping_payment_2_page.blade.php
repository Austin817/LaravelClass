@extends('layouts.template')




@section ('css')
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{asset('css/shopping_cart_01_page.css')}}">
@endsection




@section('main')

    
    <section style="background-color: #D1D5DB;" class="carts">
        <div class="cart container d-flex justify-content-center align-items-center flex-column">

            <div class="row pl-5 pr-5 pt-0" style="width: 100%;">
                <div class="row d-flex justify-content-center align-items-start flex-column" style="width: 100%;">
                    <h3 class="text-left" style="font-weight: 800;">購物車</h3>
                </div>
            </div>

            <div class="row pl-5 pr-5 mb-5 d-flex justify-content-center align-items-center" style="width: 100%;">

                <div class="pins row d-flex justify-content-between align-items-center">

                    <div class="pin d-flex justify-content-center align-items-center flex-column">
                        <div class="p-1 mb-2 rounded-circle text-center d-flex justify-content-center align-items-center"
                            style="background-color: #10b981;width: 40px;height: 40px;color: white;">1
                        </div>
                    </div>

                    <div class="progress">
                        <div class="progress-bar bg-gogo rounded-pill" role="progressbar" style="width: 100%"
                            aria-valuenow="15" aria-valuemin="25" aria-valuemax="25">
                        </div>
                    </div>

                    <div class="pin d-flex justify-content-center align-items-center flex-column">
                        <div class="p-1 mb-2 rounded-circle text-center d-flex justify-content-center align-items-center"
                            style="background-color: #10b981;width: 40px;height: 40px;color: white;">2
                        </div>
                    </div>

                    <div class="progress">
                        <div class="progress-bar bg-gogo rounded-pill" role="progressbar" style="width: 40%"
                            aria-valuenow="15" aria-valuemin="25" aria-valuemax="25">
                        </div>
                    </div>

                    <div class="pin d-flex justify-content-center align-items-center flex-column">
                        <div class="p-1 mb-2 rounded-circle text-center d-flex justify-content-center align-items-center"
                            style="background-color: #ffffff;width: 40px;height: 40px;color: black;">3</div>

                    </div>

                    <div class="progress">
                        <div class="progress-bar bg-gogo rounded-pill" role="progressbar" style="width: 0%"
                            aria-valuenow="15" aria-valuemin="25" aria-valuemax="25">
                        </div>
                    </div>

                    <div class="pin d-flex justify-content-center align-items-center flex-column">
                        <div class="p-1 mb-2 rounded-circle text-center d-flex justify-content-center align-items-center"
                            style="background-color: #ffffff;width: 40px;height: 40px;color: black;">4</div>
                    </div>

                </div>
            </div>



            <div style="border-top: 1px solid rgb(230, 230, 230);margin-top: 20px;margin-bottom: 20px;width:94%;">
            </div>


            <form action="/shopping_cart/payment_2/check" method="POST" style="width: 100%;" class="">
                @csrf
                <div class="row pl-5 pr-5 pt-3" style="width: 100%;">
                    <div class="row d-flex justify-content-center align-items-start flex-column" style="width: 100%;">
                        <h4 class="text-left" style="font-weight: normal;">
                            付款方式
                        </h4>
                    </div>
                </div>

                @php
                    $payment = Session::get('payment');
                @endphp

                <div class="container p-0 pt-3 pl-5 pr-5">
                    <div class="row d-flex justify-content-center align-items-center">
                        <div class="col-12 d-flex align-items-center">
                            <div class="form-check">
                                <input id="radio-credit" class="form-check-input" type="radio" name="payment" 
                                    value="credit" @if ($payment == "credit") checked @endif required>
                                <label class="form-check-label" for="radio-credit">
                                    信用卡付款
                                </label>
                            </div>
                        </div>
                        <div
                            style="border-top: 1px solid rgb(230, 230, 230);margin-top: 20px;margin-bottom: 20px;width:96%;">
                        </div>
                    </div>
                    <div class="row d-flex justify-content-center align-items-center">
                        <div class="col-12 d-flex align-items-center">
                            <div class="form-check">
                                <input id="radio-atm" class="form-check-input" type="radio" name="payment" 
                                    value="atm" @if ($payment == "atm") checked @endif required>
                                <label class="form-check-label" for="radio-atm">
                                    網路 ATM
                                </label>
                            </div>
                        </div>
                        <div
                            style="border-top: 1px solid rgb(230, 230, 230);margin-top: 20px;margin-bottom: 20px;width:96%;">
                        </div>
                    </div>
                    <div class="row d-flex justify-content-center align-items-center">
                        <div class="col-12 d-flex align-items-center">
                            <div class="form-check">
                                <input id="radio-cvs" class="form-check-input" type="radio" name="payment" 
                                    value="cvs" @if ($payment == "cvs") checked @endif required>
                                <label class="form-check-label" for="radio-cvs">
                                    超商代碼
                                </label>
                            </div>
                        </div>
                        <div
                            style="border-top: 1px solid rgb(230, 230, 230);margin-top: 20px;margin-bottom: 40px;width:100%;">
                        </div>
                    </div>

                </div>

                <div class="row pl-5 pr-5 pt-3" style="width: 100%;">
                    <div class="row d-flex justify-content-center align-items-start flex-column" style="width: 100%;">
                        <h4 class="text-left" style="font-weight: normal;">運送方式</h4>
                    </div>
                </div>

                @php
                    $shipment = Session::get('shipment');
                @endphp

                <div class="container p-0 pt-3 pl-5 pr-5">
                    <div class="row d-flex justify-content-center align-items-center">
                        <div class="col-12 d-flex align-items-center">
                            <div class="form-check">
                                <input id="radio-home" class="form-check-input" type="radio" name="shipment" 
                                    value="home" @if ($shipment == "home") checked @endif required>
                                <label class="form-check-label" for="radio-home">
                                    黑貓宅配
                                </label>
                            </div>
                        </div>
                        <div
                            style="border-top: 1px solid rgb(230, 230, 230);margin-top: 20px;margin-bottom: 20px;width:96%;">
                        </div>
                    </div>
                    <div class="row d-flex justify-content-center align-items-center">
                        <div class="col-12 d-flex align-items-center">
                            <div class="form-check">
                                <input id="radio-store" class="form-check-input" type="radio" name="shipment" 
                                    value="store" @if ($shipment == "store") checked @endif required>
                                <label class="form-check-label" for="radio-store">
                                    超商店到店
                                </label>
                            </div>
                        </div>
                        <div
                            style="border-top: 1px solid rgb(230, 230, 230);margin-top: 20px;margin-bottom: 20px;width:96%;">
                        </div>
                    </div>

                </div>
                <div class="container p-0 pt-3 pl-5 pr-5">
                    <div class="container p-0 m-0">

                        <div class="row p-0">
                            <div class="col-xl-9 col-lg-8 col-5"></div>
                            <div class="col-xl-1 col-lg-2 col-3">數量:</div>
                            <div class="col-xl-2 col-lg-2 col-4 text-right p-0">{{\Cart::getTotalQuantity()}}</div>
                        </div>
                        @php
                            $subTotal = \Cart::getSubTotal();
                            $shipment = \Cart::getSubTotal() > 1000000 ? 0 : 600 ;
                            dd($subTotal,$shipment);

                        @endphp
                        <div class="row p-0">
                            <div class="col-xl-9 col-lg-8 col-5"></div>
                            <div class="col-xl-1 col-lg-2 col-3">小計:</div>
                            <div class="col-xl-2 col-lg-2 col-4 text-right p-0">{{number_format($subTotal)}}</div>
                        </div>
                        <div class="row p-0">
                            <div class="col-xl-9 col-lg-8 col-5"></div>
                            <div class="col-xl-1 col-lg-2 col-3">運費:</div>
                            <div class="col-xl-2 col-lg-2 col-4 text-right p-0">{{$shipment}}</div>
                        </div>
                        <div class="row p-0">
                            <div class="col-xl-9 col-lg-8 col-5"></div>
                            <div class="col-xl-1 col-lg-2 col-3">總計:</div>
                            <div class="col-xl-2 col-lg-2 col-4 text-right p-0">{{number_format($subTotal + $shipment)}}</div>
                        </div>

                        <div
                            style="border-top: 1px solid rgb(230, 230, 230);margin-top: 20px;margin-bottom: 20px;width: 100%;">
                        </div>
                    </div>


                    <div class="container p-0 pt-3 pl-5 pr-5">

                        <div class="container d-flex justify-content-between" style="padding: 0;">
                            <a href="/shopping_cart/list_1"><button type="button" class="btn btn-primary btn-lg pbr-color"
                                    style="padding: 6px 30px;">Back</button></a>
                            <button type="submit" class="btn btn-primary btn-lg pb-color"
                                    style="padding: 6px 30px;">Next</button>
                        </div>

                    </div>

                </div>
            </form>


        </div>

    </section>



@endsection





   



