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
                        <div class="progress-bar bg-gogo rounded-pill" role="progressbar" style="width: 100%"
                            aria-valuenow="15" aria-valuemin="25" aria-valuemax="25">
                        </div>
                    </div>

                    <div class="pin d-flex justify-content-center align-items-center flex-column">
                        <div class="p-1 mb-2 rounded-circle text-center d-flex justify-content-center align-items-center"
                            style="background-color: #10b981;width: 40px;height: 40px;color: white;">3
                        </div>
                    </div>

                    <div class="progress">
                        <div class="progress-bar bg-gogo rounded-pill" role="progressbar" style="width: 40%"
                            aria-valuenow="15" aria-valuemin="25" aria-valuemax="25">
                        </div>
                    </div>

                    <div class="pin d-flex justify-content-center align-items-center flex-column">
                        <div class="p-1 mb-2 rounded-circle text-center d-flex justify-content-center align-items-center"
                            style="background-color: #ffffff;width: 40px;height: 40px;color: black;">4</div>
                    </div>

                </div>
            </div>

            <form action="/shopping_cart/information_3/check" method="POST" style="width: 100%;">
                @csrf
                <div style="border-top: 1px solid rgb(230, 230, 230);margin-top: 20px;margin-bottom: 20px;width:94%;">
                </div>

                <div class="row pl-5 pr-5 pt-3" style="width: 100%;">
                    <div class="row d-flex justify-content-center align-items-start flex-column" style="width: 100%;">
                        <h4 class="text-left" style="font-weight: normal;">
                            寄送資料
                        </h4>
                    </div>
                </div>

                <div class="container p-0 pt-3 pl-5 pr-5">

                    {{-- <form action="/shopping_cart/information_3/check" method="POST"> --}}
                        <div class="form-group">
                            <label for="name">姓名</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="王小名" required>
                        </div>
                        <div class="form-group">
                            <label for="phone">電話</label>
                            <input type="text" class="form-control" id="phone" name="phone" placeholder="0912345678" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="abc123@gmail.com" required>
                        </div>
                        <div class="city-selector-set form-row">
                            <div class="form-group col-md-6">
                                <label for="county">地址</label>
                                <select type="text" class="county form-control" id="county" name="county" placeholder="城市" required></select>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="district" style="color: transparent;cursor: default;">區域</label>
                                <select class="district form-control" id="district" name="district" placeholder="區域" required></select>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="zipcode" style="color: transparent;cursor: default;">區號</label>
                                <input type="text" size="3" class="zipcode form-control" id="zipcode" name="zipcode" placeholder="郵遞區號" required>
                            </div>
                            <div class="form-group col-md-12">
                                <input type="text" class="form-control" id="address" name="address" placeholder="地址" required>
                            </div>
                        </div>


                    {{-- </form> --}}

                    <div style="border-top: 1px solid rgb(230, 230, 230);margin-top: 20px;margin-bottom: 20px;width:100%;">
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
                        $SubTotal = \Cart::getSubTotal();
                        $shipment = \Cart::getSubTotal() > 1000000 ? 0 : 600 ; 
                        @endphp
                        <div class="row p-0">
                            <div class="col-xl-9 col-lg-8 col-5"></div>
                            <div class="col-xl-1 col-lg-2 col-3">小計:</div>
                            <div class="col-xl-2 col-lg-2 col-4 text-right p-0">{{number_format($SubTotal)}}</div>
                        </div>
                        <div class="row p-0">
                            <div class="col-xl-9 col-lg-8 col-5"></div>
                            <div class="col-xl-1 col-lg-2 col-3">運費:</div>
                            <div class="col-xl-2 col-lg-2 col-4 text-right p-0">{{$shipment}}</div>
                        </div>
                        <div class="row p-0">
                            <div class="col-xl-9 col-lg-8 col-5"></div>
                            <div class="col-xl-1 col-lg-2 col-3">總計:</div>
                            <div class="col-xl-2 col-lg-2 col-4 text-right p-0">{{number_format($SubTotal + $shipment)}}</div>
                        </div>

                        <div
                            style="border-top: 1px solid rgb(230, 230, 230);margin-top: 20px;margin-bottom: 20px;width: 100%;">
                        </div>
                    </div>


                    <div class="container p-0 pt-3 pl-5 pr-5">

                        <div class="container d-flex justify-content-between" style="padding: 0;">
                            <a href="/shopping_cart/payment_2"><button type="button" class="btn btn-primary btn-lg pbr-color"
                                style="padding: 6px 30px;">Back</button></a>
                            <button type="submit" class="btn btn-primary btn-lg pb-color"
                                style="padding: 6px 30px;">Confirm Payment</button>
                        </div>

                    </div>

                </div>

            </form>

        </div>

    </section>
@endsection





@section ('js')
    <script src="{{ asset('js/tw-city-selector.js') }}"></script>
    <script>
        new TwCitySelector({
            el: '.city-selector-set',
            elCounty: '.county', // 在 el 裡查找 element
            elDistrict: '.district', // 在 el 裡查找 element
            elZipcode: '.zipcode' // 在 el 裡查找 element
        });
    </script>
@endsection

    


   
