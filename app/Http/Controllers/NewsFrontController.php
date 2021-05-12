<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class NewsFrontController extends Controller
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

    public function detail($id)
    {
        $newData = News::find($id);
        return view('news.news_content_page',compact('newData'));
    }

}
