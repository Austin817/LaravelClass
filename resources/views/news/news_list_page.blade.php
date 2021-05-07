@extends('layouts.template')

@section ('css')
    <link rel="stylesheet" href="{{ asset('/css/news_list_page.css') }}">
@endsection


@section ('main')
    <div class="container pt-5">
        <div class="title">
            <div class="title">
                <div class="title-icon"><img src="https://www.taiwan.net.tw/att/topTitleImg/21_0001001.svg" alt="" oncontextmenu="alert('版權僅適用本網站禁止下載使用');return false;"></div><h2>最新消息</h2>
            </div>
        
            <div class="sort-item">
                <span>資料總筆數：<b>175</b></span> <span>每頁筆數：<b>10</b></span> <span>總頁數：<b>18</b></span> <span>目前頁次：<b>1</b></span><a class="createBtn" href="/news/create"><button>Create New</button></a>
            </div>
        </div>

        <hr>

        <ul>
            @foreach ($newData as $Data)
                <li>
                    <div class="ColumnBlock">
                        <div class="ColumnBlockPic">
                            <img class="lazyloaded" src="{{$Data->img}}" alt="" oncontextmenu="alert('版權僅適用本網站禁止下載使用');return false;">
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
                                <a class="editBtn" href="/news/edit/{{$Data->id}}">
                                    <button>Edit Item</button>
                                </a>
                                <a class="deleteBtn" href="/news/delete/{{$Data->id}}">
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



    
