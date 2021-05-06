<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewsController extends Controller
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



    public function create()
    {
        return view('news.create_news_page');
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

    public function store(Request $request)
    {
       // 取得資料
            //dd($request->all());
       // 儲存資料至資料庫
            News::create([
                'title'=>$request->title,
                'date'=>$request->date,
                'img'=>$request->img,
                'content'=>$request->content,
                'view'=>0,
            ]);
       // 返回最新消息列表頁
            return redirect('/news');

    }

    public function update($id,Request $request)
    {
        News::
            where('id', $id)
            ->update([
                'title'=>$request->title,
                'date'=>$request->date,
                'img'=>$request->img,
                'content'=>$request->content,
                'view'=>0,
            ]);
    }

    public function delete($id)
    {
        News::
            find($id)
            ->delete();
        return redirect('/news');
    }

    public function detail($id)
    {
        $newData = News::find($id);
        return view('news.news_content_page',compact('newData'));
    }


}
 
