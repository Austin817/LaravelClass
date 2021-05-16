@extends('layouts.app')

@section ('css')
    <link rel="stylesheet" href="{{ asset('/css/news_create_page.css') }}">
@endsection

@section('main')
    <div class="container p-5">
        <form action="/home/update/{{$newsData->id}}" method="POST" class="mx-auto" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="title">標題</label>
                <input type="text" id="title" name="title" value="{{$newsData->title}}">
            </div>
            <div class="form-group">
                <label for="date">時間</label>
                <input type="date" id="date" name="date" value="{{$newsData->date}}">
            </div>
            <div class="form-group">
                <label for="img">圖片</label>
                <input type="file" accept="image/*" id="img" name="img" value="{{asset($newsData->img)}}">
                <img src="{{asset($newsData->img)}}" style="height:auto;width:100px" alt="">
            </div>
            <div class="form-group">
                <label for="content">內容</label>
                <textarea name="content" id="content" cols="30" rows="10">{{$newsData->content}}</textarea>
            </div>
            <button type="submit">修改完成</button>
        </form>
    </div>
@endsection