@extends('layouts.app')

@section ('css')
    <link rel="stylesheet" href="{{ asset('/css/products_create_page.css') }}">
@endsection

@section('main')
    <div class="container p-5">
        <form action="/home/product" method="POST" class="mx-auto" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="name">名字</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="type_id">類別</label>
                <select name="type_id" id="type_id">
                    @foreach ($productTypesData as $Data)
                        <option value="{{$Data->id}}">{{$Data->type_name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="description">描述</label>
                <textarea name="description" id="description" cols="30" rows="10" required></textarea>
            </div>
            <div class="form-group">
                <label for="price">價格</label>
                <input type="text" id="price" name="price" required>
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