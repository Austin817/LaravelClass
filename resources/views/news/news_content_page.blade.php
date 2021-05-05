@extends('layouts.template')

@section ('css')
    <link rel="stylesheet" href="/css/news_content_page.css">
@endsection



@section('main')
    <div class="container">
        <div class="title">
            <h2>{{$newData->title}}</h2>
            <div class="sort-item"><span> 發布日期：<b>{{$newData->date}}</b></span> <span>瀏覽次數：<b>{{$newData->views}}</b></span></div>
        </div>
        <div>
            <p>{{$newData->content}}</p>    
        </div>
    </div>
@endsection


   
   