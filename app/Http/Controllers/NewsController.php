<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewsController extends Controller
{
    //
    public function index()
    {
        $newData = DB::table('news')->get();
        // dd($newData);
        // dd($newData[0]->img);
        return view('news.news_list_page',compact('newData'));
    }

    public function create($title,$date,$img)
    {
        DB::table('news')->insert([
            'title'=>$title,
            'date'=>$date,
            'img'=>$img,
            'content'=>'林哲賢',
            'views'=>99999,
        ]);
    }

    public function update($id)
    {
        DB::table('news')
        ->where('id', $id)
        ->update(['title'=> 'aaaaa']);
    }

    public function delete($id)
    {
        DB::table('news')
        ->where('id', $id)
        ->delete();
    }

    public function detail($id)
    {
        DB::table('news')
        ->find($id);
        return view('NewsController@detail');
    }

}
