<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class NewsController extends Controller
{
    //

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


    public function editNewsTable()
    {
        $newsData = News::get();
        return view('news.home_edit_news_table',compact('newsData'));
    }


    public function create()
    {
        return view('news.home_create_news_page');
    }


    public function store(Request $request)
    {

        $requsetData = $request->all();

        if($request->hasFile('img')) {
            $file = $request->file('img');
            $path = $this->fileUpload($file,'newImg');
            $requsetData['img'] = $path;
        }


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



            News::create($requsetData);   // 簡短寫法，會直接更改有傳進去的資料

       // 返回最新消息列表頁
            return redirect('/home/editNewsTable');
    }


    public function edit($id)
    {
        $newsData = News::find($id);
        return view('news.home_edit_news_page',compact('newsData'));
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

        $item = News::find($id);

        $requsetData = $request->all();

        if($request->hasFile('img')) {
            $old_image = $item->img;
            $file = $request->file('img');
            $path = $this->fileUpload($file,'productImg');
            $requsetData['img'] = $path;
            File::delete(public_path().$old_image);
        }

        $item->update($requsetData);

        return redirect('/home/editNewsTable');
    }



    public function delete($id)
    {

        $item = News::find($id);
        $old_image = $item->img;
        if(file_exists(public_path().$old_image)){
            File::delete(public_path().$old_image);
        }
        $item->delete();
    
        return redirect('/home/editNewsTable');
       
    }
    

    private function fileUpload($file,$dir){
        //防呆：資料夾不存在時將會自動建立資料夾，避免錯誤
        if( ! is_dir('upload/')){
            mkdir('upload/');
        }
        //防呆：資料夾不存在時將會自動建立資料夾，避免錯誤
        if ( ! is_dir('upload/'.$dir)) {
            mkdir('upload/'.$dir);
        }
        //取得檔案的副檔名
        $extension = $file->getClientOriginalExtension();
        //檔案名稱會被重新命名
        $filename = strval(time().md5(rand(100, 200))).'.'.$extension;
        //移動到指定路徑
        move_uploaded_file($file, public_path().'/upload/'.$dir.'/'.$filename);
        //回傳 資料庫儲存用的路徑格式
        return '/upload/'.$dir.'/'.$filename;
    }




}
 
