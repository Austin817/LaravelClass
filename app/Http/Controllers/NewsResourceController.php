<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;

class NewsResourceController extends Controller
{
    //
    public function index()
    {
        $newData = News::get();
        // dd($newData);

        // $newData = DB::table('news')->get();
        // dd($newData);
        // dd($newData[0]->img);
        return view('news.news_list_page',compact('newData'));
    }



    public function createUnset($title)
    {
        News::create([
            'title'=>$title,
            'date'=>'2021-05-05',
            'img'=>'https://images.pexels.com/photos/2599244/pexels-photo-2599244.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940',
            'content'=>'asdfghjkl',
            'view'=>0,
        ]);
    }



    public function detail($id)
    {
        $newData = News::find($id);
        return view('news.news_content_page',compact('newData'));
    }


    public function editNews()
    {
        $newData = News::get();
        return view('news.home_edit_news',compact('newData'));
    }

    public function editNewsTable()
    {
        $newData = News::get();
        return view('news.home_edit_news_table',compact('newData'));
    }


    public function create()
    {
        return view('news.home_create_news_page');
    }


    public function store(Request $request)
    {
       // 取得資料
            //dd($request->all());
       // 儲存資料至資料庫
            // News::create([
            //     'title'=>$request->title,
            //     'date'=>$request->date,
            //     'img'=>$request->img,
            //     'content'=>$request->content,
            //     'view'=>0,
            // ]);

            News::create($request->all());   // 簡短寫法，會直接更改有傳進去的資料

       // 返回最新消息列表頁
            return redirect('/home/editNewsTable');
    }


    public function edit($id)
    {
        $newData = News::find($id);
        return view('news.home_edit_news_page',compact('newData'));
    }


    public function update($id,Request $request)
    {
        // News::
        //     find($id)
        //     ->update([
        //         'title'=>$request->title,
        //         'date'=>$request->date,
        //         'img'=>$request->img,
        //         'content'=>$request->content,
        //         'view'=>0,
        //     ]);

        News::find($id)->update($request->all());
        return redirect('/home/editNewsTable');
    }



    public function delete($id)
    {
        News::
            find($id)
            ->delete();
        return redirect('/home/editNewsTable');
    }

}
