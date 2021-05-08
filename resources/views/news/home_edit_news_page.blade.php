@extends('layouts.app')

@section ('css')
    <link rel="stylesheet" href="{{ asset('/css/news_store_page.css') }}">
@endsection

@section('main')
    <div class="container p-5">
        <form action="/home/update/{{$newData->id}}" method="POST" class="mx-auto">
            @csrf
            <div class="form-group">
                <label for="title">標題</label>
                <input type="text" id="title" name="title" value="{{$newData->title}}">
            </div>
            <div class="form-group">
                <label for="date">時間</label>
                <input type="date" id="date" name="date" value="{{$newData->date}}">
            </div>
            <div class="form-group">
                <label for="img">圖片</label>
                <input type="text" id="img" name="img" value="{{$newData->img}}">
            </div>
            <div class="form-group">
                <label for="content">內容</label>
                <textarea name="content" id="content" cols="30" rows="10">{{$newData->content}}</textarea>
            </div>
            <button type="submit">修改完成</button>
        </form>
    </div>
@endsection