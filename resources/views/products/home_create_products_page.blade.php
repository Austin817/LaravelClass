@extends('layouts.app')

@section ('css')
    <link rel="stylesheet" href="{{ asset('/css/products_create_page.css') }}">
    {{-- 5/31 summer note --}}
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    {{-- 5/31 summer note --}}
@endsection

@section('main')
    <div class="container p-5">
        <form action="/home/product" method="POST" class="mx-auto" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="name">名字</label>
                <input type="text" id="name" name="name" required value="test">
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
                <textarea name="description" id="summernote" cols="30" rows="10" required></textarea>
            </div>
            <div class="form-group">
                <label for="price">價格</label>
                <input type="text" id="price" name="price" required value="123">
            </div>
            <div class="form-group">
                <label for="img">主要圖片</label>
                <input type="file" accept="image/*" id="img" name="img" required>
            </div>
            <div class="form-group">
                <label for="imgs">其他圖片</label>
                <input type="file" accept="image/*" id="imgs" name="imgs[]" multiple required>
            </div>
            <input id="test" name="test[]" type="file" multiple hidden>
            <button type="submit">送出</button>
        </form>
    </div>

    {{-- <article>
        {{ 資料 }}  innerTEXT

        {!!資料!!}  innerHTML  
        {!!--資料--!!}
    </article> --}}

@endsection



@section ('js')
    {{-- jquery --}}
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    {{-- jquery --}}
    
    {{-- 5/31 summer note --}}
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    {{-- 5/31 summer note --}}

    <script>
        window.onload = () => {
            let prevFiles = [];
            $('#summernote').summernote({
                callbacks: {
                    onImageUpload: async function(files) {
                        const dt = new DataTransfer();
                        [...prevFiles, ...files].forEach(file => {
                            dt.items.add(file);
                        });
                        prevFiles = files;
                        test.files = dt.files;

                        [...files].forEach(file => {
                            const imgNode = document.createElement('img');
                            imgNode.src = URL.createObjectURL(file);
                            imgNode.dataset.fileName = file.name;
                            <img src="blob:..." data-fileName="cat1.jpg" />
                            // $('#summernote').summernote('insertImage', URL.createObjectURL(file));
                        });
                        // var formData = new FormData();
                        // formData.append('_token', '{{ csrf_token() }}');
                        // // 這裡name改imgs，檔案帶入files
                        // for(var i = 0 ; i < files.length ; i++){
                        //     formData.append('imgs[]', files[i]);
                        // }

                        const result = await fetch('/home/summernote/store', { method: 'POST', body: formData });
                        const { pathArray } = await result.json();
                        // console.log(pathArray);
                        // path.forEach(p => {
                        //     a.summernote('insertImage', p);
                        // })

                        // 

                        // fetch('/home/summernote/store',{
                        //     method:'POST',
                        //     body: formData
                        // })
                        // .then(function (response) {
                        //     a.summmernote('insertText', '123');
                        //     return response.json();
                        // })
                        // .then(function (path) {
                        //     // a.summmernote('insertImage', path[i]);
                        //     // for(var i = 0 ; i < files.length ; i++){
                        //     //     a.summmernote('insertImage', path[i]);
                        //     // }
                        // });
                    }
                }
            });
        };
    </script>
@endsection

