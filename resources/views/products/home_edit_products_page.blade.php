@extends('layouts.app')

@section ('css')
    <link rel="stylesheet" href="{{ asset('/css/products_create_page.css') }}">
@endsection

@section('main')
    <div class="container p-5">
        <form action="/home/product" method="POST" class="mx-auto" enctype="multipart/form-data">
            @csrf
            @method()
            <div class="form-group">
                <label for="name">名字</label>
                <input type="text" id="name" name="name" value="{{$productData->name}}" required>
            </div>
            <div class="form-group">
                <label for="type_id">類別</label>
                <select name="type_id" id="type_id">
                    @foreach ($productTypesData as $Data)
                        <option value="{{$Data->id}}" @if ($Data->id == $productData->type_id) selected @endif>{{$Data->type_name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="description">描述</label>
                <textarea name="description" id="description" cols="30" rows="10" required>{{$productData->description}}</textarea>
            </div>
            <div class="form-group mb-5">
                <label for="price">價格</label>
                <input type="text" id="price" name="price" value="{{$productData->price}}" required>
            </div>
            <div class="form-group mb-5">
                <label for="img">主要圖片</label>
                <div class="mb-2" style="background-image: url({{$productData->img}}); background-position:center; background-size:cover; width:100px; height:100px"></div>
                <input type="file" accept="image/*" id="img" name="img" value="{{$productData->img}}">
            </div>
            <div class="form-group">
                <label for="imgs">其他圖片</label>
                <div class="d-flex flex-wrap">
                    @foreach ($productData->linkProductImg as $item)
                        <div class="mr-3 mb-3 img-delete-btn-area" style="background-image: url({{$item->img}}); background-position:center; background-size:cover; width:100px; height:100px">
                            <div class="img-delete-btn" data-id="{{$item->id}}">X</div>
                        </div>
                    @endforeach
                </div>
                <input type="file" accept="image/*" id="imgs" name="imgs[]" multiple required>
            </div>
            <button type="submit">送出</button>
        </form>
    </div>
@endsection


@section('js')
    <script>

        var deleteBtns = document.querySelectorAll('.img-delete-btn');
        deleteBtns.forEach(function (btn) {
            btn.addEventListener('click',function () {
                if(confirm('是否要刪除這張圖片?')){
                    var imgId = this.getAttribute('data-id')

                    var formData = new FormData();
                    formData.append('id',imgId);
                    formData.append('_token','{{ csrf_token() }}');
                    var delbtn = this;
                    fetch('/home/product/deleteImg',{
                        method:'POST',
                        body: formData
                    })
                    .then(function (response) {
                        return response.text();
                    })
                    .then(function (result) {
                        if(result == 'success'){
                            delbtn.parentElement.remove();
                        }
                    });
                }
            })
        });
    </script>
@e