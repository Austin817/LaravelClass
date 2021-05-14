@extends('layouts.app')

@section ('css')
    <link rel="stylesheet" href="{{ asset('/css/products_create_page.css') }}">
@endsection

@section('main')
    <div class="container p-5">
        <form action="/home/store" method="POST" class="mx-auto" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="name">名字</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="type_id">類別</label>
                <input type="date" id="type_id" name="type_id" required>
            </div>
            <div class="form-group">
                <label for="description">描述</label>
                <textarea name="description" id="description" cols="30" rows="10" required></textarea>
            </div>
            <div class="form-group">
                <label for="price">價格</label>
                <input type="date" id="price" name="price" required>
            </div>
            <div class="form-group">
                <label for="img">主要圖片</label>
                <input type="file" accept="image/*" id="img" name="img" required>
            </div>
            <div class="form-group">
                <label for="imgs">其他圖片</label>
                <input type="file" accept="image/*" id="imgs" name="imgs[]" multiple required>
            </div>
            <button type="submit">送出</button>
        </form>
    </div>
@endsection