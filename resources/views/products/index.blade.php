@extends('layouts.template')


@section ('css')
    <link rel="stylesheet" href="{{ asset('/css/products_list_page.css') }}">
@endsection




@section('main')

  
@foreach ($productsData as $Data)

  <div class="wrapper">
    <div class="product-img">
      <div style="background-image:url({{asset($Data->img)}}); background-position:center; background-size:cover; background-repeat:no-repeat; width:327px; height:420px;"></div>
    </div>
    <div class="product-info">
      <div class="product-text">
        <h1>{{$Data->name}}</h1>
        <h2>by studio and friends</h2>
        <div class="description">{!!$Data->description!!}</div>
      </div>
      <div class="product-price-btn d-flex flex-column mt-0 justify-content-between">
        <p>$<span>{{$Data->price}}</span></p>
        <button class="addshppingcart" data-id="{{$Data->id}}" type="button">buy now</button>
      </div>
    </div>
  </div>
    
@endforeach
 

@endsection




@section ('js')

  <script>
    document.querySelectorAll('.addshppingcart').forEach(function (addBtn) {
      addBtn.addEventListener('click',function () {
        console.log('123');
        var productId = this.getAttribute('data-id');

        var formData = new FormData();
        formData.append('_token','{{ csrf_token() }}');
        formData.append('productId',productId);

        fetch('/shopping_cart/add',{
          method:'POST',
          body:formData
        }).then(function (response) {
          return response.text();
        }).then(function (data) {
          if(data == 'success'){
            Swal.fire({
              icon: 'success',
              title: '成功加入購物車!',
              showConfirmButton: false,
              timer: 1700
            })
          }
        })

      });
    })
  </script>


  @if (Session::get('icon'))
    <script>
        Swal.fire({
          icon: '{{Session::get("icon")}}',
          title: '{{Session::get("title")}}',
          text: '{{Session::get("text")}}'
        });
    </script>
  @endif
  
@endsection
