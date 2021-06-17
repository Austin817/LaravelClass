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

                    <div class="progress" >
                        <div class="progress-bar bg-gogo rounded-pill" role="progressbar" style="width: 40%"
                            aria-valuenow="15" aria-valuemin="25" aria-valuemax="25">
                        </div>
                    </div>

                    <div class="pin d-flex justify-content-center align-items-center flex-column">
                        <div class="p-1 mb-2 rounded-circle text-center d-flex justify-content-center align-items-center"
                            style="background-color: #ffffff;width: 40px;height: 40px;color: black;">2</div>     
                    </div>

                    <div class="progress" >
                        <div class="progress-bar bg-gogo rounded-pill" role="progressbar" style="width: 0%"
                            aria-valuenow="15" aria-valuemin="25" aria-valuemax="25">
                        </div>
                    </div>

                    <div class="pin d-flex justify-content-center align-items-center flex-column">
                        <div class="p-1 mb-2 rounded-circle text-center d-flex justify-content-center align-items-center"
                            style="background-color: #ffffff;width: 40px;height: 40px;color: black;">3</div>

                    </div>

                    <div class="progress" >
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

            <div class="row pl-5 pr-5 pt-3" style="width: 100%;">
                <div class="row d-flex justify-content-center align-items-start flex-column" style="width: 100%;">
                    <h4 class="text-left" style="font-weight: normal;">訂單明細</h4>
                </div>
            </div>

            <div class="container p-0 pt-3 pl-5 pr-5">

                @foreach ($cartCollection as $product)

                    <div class="row d-flex justify-content-between align-items-center">
                        <div class="col-8 d-flex align-items-center">
                            <button class="delBtn" data-id="{{$product->id}}">X</button>
                            <img src="{{asset($product->attributes->img)}}" class="card-img-top ml-4 mr-3" alt=""
                                style="width: 60px; height:60px; background-color: #E0E7FF;border-radius: 50%;padding: 20px;">
                            <div class="text-left d-flex justify-content-start align-items-start flex-column">
                                <h4 class="mt-2 ">{{$product->name}}</h4>
                                <p class="my-0">#微辣</p>
                            </div>
                        </div>

                        <div class="col-4 d-flex justify-content-end align-items-center">
                            <button class="minus" style="border: 0;background-color: transparent;padding: 3px;">-</button>
                            <input class="qty" data-id="{{$product->id}}" type="number" style="max-width: 40px;" class="m-2" value="{{$product->quantity}}">
                            <button class="plus" style="border: 0;background-color: transparent;padding: 3px;">+</button>
                            <p class="money m-0 pl-3" data-price="{{$product->price}}">{{$product->price * $product->quantity}}</p>
                        </div>

                        <div
                            style="border-top: 1px solid rgb(230, 230, 230);margin-top: 20px;margin-bottom: 20px;width:100%;">
                        </div>
                    </div>

                @endforeach


                

                <div class="container p-0 m-0">
                    
                    <div class="row p-0">
                        <div class="col-xl-9 col-lg-8 col-5"></div>
                        <div class="col-xl-1 col-lg-2 col-3">數量:</div>
                        <div id="total-qty" class="col-xl-2 col-lg-2 col-4 text-right p-0"></div>
                    </div>
                    <div class="row p-0">
                        <div class="col-xl-9 col-lg-8 col-5"></div>
                        <div class="col-xl-1 col-lg-2 col-3">小計:</div>
                        <div id="sub-price" class="col-xl-2 col-lg-2 col-4 text-right p-0"></div>
                    </div>
                    <div class="row p-0">
                        <div class="col-xl-9 col-lg-8 col-5"></div>
                        <div class="col-xl-1 col-lg-2 col-3">運費:</div>
                        <div id="shipment-price" class="col-xl-2 col-lg-2 col-4 text-right p-0"></div>
                    </div>
                    <div class="row p-0">
                        <div class="col-xl-9 col-lg-8 col-5"></div>
                        <div class="col-xl-1 col-lg-2 col-3">總計:</div>
                        <div id="total-price" class="col-xl-2 col-lg-2 col-4 text-right p-0"></div>
                    </div>

                    <div
                        style="border-top: 1px solid rgb(230, 230, 230);margin-top: 20px;margin-bottom: 20px;width: 100%;">
                    </div>


                </div>
                <div class="container d-flex justify-content-between" style="padding: 0;">
                    <a href="/" class="btn p-color"><i class="fal fa-arrow-left"></i> Homepage</a>
                    <a href="/shopping_cart/payment_2"><button type="button" class="btn btn-primary btn-lg pb-color"
                        style="padding: 6px 30px;">Next</button></a>
                </div>


            </div>


        </div>
    </section>



@endsection





@section ('js')
    <script>

        window.addEventListener('load',ShoppingCartCalc());


        var minusBtns = document.querySelectorAll('.minus');
        var plusBtns = document.querySelectorAll('.plus');
        var qtyInputs = document.querySelectorAll('.qty');
        var deleteBtns = document.querySelectorAll('.delBtn');


        qtyInputs.forEach(function (qtyInput) {
            calcProductPrice(qtyInput);
        });


        

        plusBtns.forEach(function (plusBtn) {
            plusBtn.addEventListener('click',function () {
                // this.previousElementSibling
                // 取得當前元素前面的元素，在此處也就是取得input
                
                var input = this.previousElementSibling;
                var qty = Number(input.value) + 1;

                shoppingCartUpdate(this,input,qty);

            });
        });

        minusBtns.forEach(function (minusBtn) {
            minusBtn.addEventListener('click',function () {
                // this.nextElementSibling
                // 取得當前元素後面的元素，在此處也就是取得input
                var input = this.nextElementSibling;
                
                var qty = Number(input.value) <= 1 ? 1 : Number(input.value) - 1;
                
                shoppingCartUpdate(this,input,qty);

            });
        });

        deleteBtns.forEach(function (deleteBtn) {
            deleteBtn.addEventListener('click',function () {
                var formData = new FormData();
                deleteBtnElement = this;
                formData.append('_token','{{ csrf_token() }}');
                formData.append('productId',this.getAttribute('data-id'));
                fetch('/shopping_cart/delete',{
                    'method':'POST',
                    'body': formData
                }).then(function (response) {
                    return response.text();
                }).then(function (data) {
                    if(data == 'success'){
                        var productArea = deleteBtnElement.parentElement.parentElement;
                        productArea.remove();
                        ShoppingCartCalc();
                    }
                });
            });
        });



        function calcProductPrice(element) {
            // 觸發事件的元素的父層
            var controlArea = element.parentElement;
            var input = controlArea.querySelector('.qty');
            var price = controlArea.querySelector('.money');
            var newPrice = (price.getAttribute('data-price') * input.value).toLocaleString();
            price.innerText = newPrice;
        }


        function shoppingCartUpdate(element,input,qty) {
            var productId = input.getAttribute('data-id');
            var formData = new FormData();
            formData.append('_token','{{ csrf_token() }}');
            formData.append('productId',productId);
            formData.append('qty',qty);

            fetch('/shopping_cart/update',{
                'method':'POST',
                'body':formData
            }).then(function (response) {
                return response.text();
            }).then(function (data) {
                input.value = Number(data);
                calcProductPrice(element);
                ShoppingCartCalc();
            });
        }



        function ShoppingCartCalc() {
            var totalQty = 0;
            var subPrice = 0;
            var shipmentPrice = 600;
            var totalPrice = 0;

            var qtyInputs = document.querySelectorAll('.qty');
            qtyInputs.forEach(function (qtyInput) {
                totalQty += Number(qtyInput.value);

                var price = qtyInput.nextElementSibling.nextElementSibling.getAttribute('data-price');
                subPrice += price * qtyInput.value;
            });

            document.querySelector('#total-qty').innerText = totalQty.toLocaleString();
            document.querySelector('#sub-price').innerText = subPrice.toLocaleString();

            if(subPrice > 1000000){
                shipmentPrice = 0;
            }

            document.querySelector('#shipment-price').innerText = shipmentPrice.toLocaleString();


            totalPrice = subPrice + shipmentPrice;

            document.querySelector('#total-price').innerText = totalPrice.toLocaleString();

        }


    </script>
@endsection

    


   
