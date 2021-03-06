@extends('layouts.app')

@section ('css')
    <link rel="stylesheet" href="{{ asset('/css/news_create_page.css') }}">
@endsection

@section('main')
    <div class="container p-5">
        <form action="/home/store" method="POST" class="mx-auto" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="title">標題</label>
                <input type="text" id="title" name="title" required>
            </div>
            <div class="form-group">
                <label for="date">時間</label>
                <input type="date" id="date" name="date" required>
            </div>
            <div class="form-group">
                <label for="img">圖片</label>
                <input type="file" accept="image/*" id="img" name="img" required>
            </div>
            <div class="form-group">
                <label for="content">內容</label>
                <textarea name="content" id="content" cols="30" rows="10" required></textarea>
            </div>
            <button type="submit">送出</button>
        </form>
    </div>
@endsection