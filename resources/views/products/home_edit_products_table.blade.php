@extends('layouts.app')




@section ('css')
    <link rel="stylesheet" href="{{ asset('/css/products_list_page.css') }}">
@endsection





@section('main')





    <table id="news" class="display">
        <thead>
            <tr>
                <th>name</th>
                <th>type_id</th>
                <th>img</th>
                <th>description</th>
                <th>price</th>
                <th>Features
                    <a class="createBtn float-right" href="/home/create">
                        <button>Create New +</button>
                    </a>
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($newData as $Data)
                <tr>
                    <td>{{$Data->name}}</td>
                    <td>{{$Data->type_id}}</td>
                    <td><img src="{{asset($Data->img)}}" style="height:auto;width:100px" alt=""></td>
                    <td>{{$Data->description}}</td>
                    <td>{{$Data->price}}</td>
                    <td>
                        <a class="killBtn" data-href="/home/delete/{{$Data->id}}">
                            <button>Kill Item</button>
                        </a>
                        <a class="editBtn" href="/home/edit/{{$Data->id}}">
                            <button>Edit Item</button>
                        </a>
                        <a class="deleteBtn" href="/home/delete/{{$Data->id}}">
                            <button>Delete Item</button>
                        </a>
                    </td>
                </tr>
            @endforeach 
        </tbody>
    </table>







    @foreach ($newData as $Data)

    <div class="wrapper">
      <div class="product-img">
        <img src="{{asset($Data->img)}}" height="420" width="327">
      </div>
      <div class="product-info">
        <div class="product-text">
          <h1>{{$Data->name}}</h1>
          <h2>by studio and friends</h2>
          <p>{{$Data->description}}</p>
        </div>
        <div class="product-price-btn">
          <p><span>{{$Data->price}}</span>$</p>
          <button type="button">buy now</button>
        </div>
      </div>
    </div>
    
    @endforeach





@endsection







@section ('js')
    <script>
        var btnDelete = document.querySelectorAll('.killBtn');
        btnDelete.forEach(function (btn) {
            btn.addEventListener('click',function () {
                if (confirm ('真的?')) {
                    location.href = this.getAttribute('data-href');
                }
            })
        });
    </script>

    <script>
        $(function () {
            $("#news").DataTable({
                searching: true,    //關閉filter功能
                columnDefs: [{
                    targets: [5],
                    orderable: false,
                }]
            });
        });
    </script>
@endsection