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
        <p>{{$Data->description}}</p>
      </div>
      <div class="product-price-btn d-flex flex-column mt-0 justify-content-between">
        <p>$<span>{{$Data->price}}</span></p>
        <button type="button">buy now</button>
      </div>
    </div>
  </div>
    
@endforeach
 

@endsection




@section ('js')

@endsection
