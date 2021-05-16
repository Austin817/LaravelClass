@extends('layouts.template')


@section ('css')
    <link rel="stylesheet" href="{{ asset('/css/products_list_page.css') }}">
@endsection




@section('main')

  
@foreach ($productsData as $Data)

  <div class="wrapper">
    <div class="product-img">
      <img src="{{asset($Data->img)}}" height="auto" width="327">
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
