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

    public function create($title,$date,$content)
    {
        DB::table('news')->insert([
            'title'=>$title,
            'date'=>$date,
            'img'=>'https://images.pexels.com/photos/2599244/pexels-photo-2599244.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940',
            'content'=>$content,
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
        $newData = DB::table('news')->find($id);
        return view('news.news_content_page',compact('newData'));
    }

}
 