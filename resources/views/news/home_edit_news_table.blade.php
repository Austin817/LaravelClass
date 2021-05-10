@extends('layouts.app')

@section ('css')
    <link rel="stylesheet" href="{{ asset('/css/news_list_page.css') }}">
@endsection

@section('main')





    <table id="news" class="display">
        <thead>
            <tr>
                <th>title</th>
                <th>date</th>
                <th>img</th>
                <th>content</th>
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
                    <td>{{$Data->title}}</td>
                    <td>{{$Data->date}}</td>
                    <td><img src="{{asset($Data->img)}}" style="height:auto;width:100px" alt=""></td>
                    <td>{{$Data->content}}</td>
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







    <div class="container pt-5">
        <div class="title">
            <div class="title">
                <div class="title-icon"><img src="https://www.taiwan.net.tw/att/topTitleImg/21_0001001.svg" alt="" oncontextmenu="alert('版權僅適用本網站禁止下載使用');return false;"></div><h2>最新消息</h2>
            </div>
        
            <div class="sort-item">
                <span>資料總筆數：<b>175</b></span> <span>每頁筆數：<b>10</b></span> <span>總頁數：<b>18</b></span> <span>目前頁次：<b>1</b></span><a class="createBtn" href="/home/create"><button>Create New +</button></a>
            </div>
        </div>

        <hr>

        <ul>
            @foreach ($newData as $Data)
                <li>
                    <div class="ColumnBlock">
                        <div class="ColumnBlockPic">
                            <img class="lazyloaded" src="{{asset($Data->img)}}" alt="" oncontextmenu="alert('版權僅適用本網站禁止下載使用');return false;">
                        </div>
                        <div class="ColumnBlockInfo">
                            <div class="hashtag">
                                <span class="color-purple">最新消息</span>
                            </div>
                            <h3>
                                <a href="/news/detail/{{$Data->id}}">{{$Data->title}}</a>
                            </h3>
                            <span>{{$Data->date}}</span>
                            <p>{{$Data->content}}</p>
                            <div class="function">
                                <a class="killBtn" data-href="/home/delete/{{$Data->id}}">
                                    <button>Kill Item</button>
                                </a>
                                <a class="editBtn" href="/home/edit/{{$Data->id}}">
                                    <button>Edit Item</button>
                                </a>
                                <a class="deleteBtn" href="/home/delete/{{$Data->id}}">
                                    <button>Delete Item</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </li>
            @endforeach   
        </ul>    
    </div>
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
        targets: [4],
        orderable: false,
    }]
});
});
    </script>
@endsection