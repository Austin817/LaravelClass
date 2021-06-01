<?php

namespace App\Http\Controllers;

use App\Product;
use App\ProductImg;
use App\ProductType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class ProductResourceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $productsData = Product::get();
        return view('products.home_edit_products_table',compact('productsData'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $productTypesData = ProductType::get();
        return view('products.home_create_products_page',compact('productTypesData'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $requestData = $request->all();

        if($request->hasFile('img')) {
            $file = $request->file('img');
            $path = Storage::disk('myfile')->putFile('product',$file);
            $requestData['img'] = Storage::disk('myfile')->url($path);
        }


        $product = Product::create($requestData);

        $imgs = $request->file('imgs');
        foreach($imgs as $img){
            // 存檔並取得檔案在myfile內的路徑
            $path = Storage::disk('myfile')->putFile('productImg',$img);
            // 取得檔案在public的完整路徑
            $publicPath = Storage::disk('myfile')->url($path);
            // 存到資料庫
            ProductImg::create([
                'product_id'=>$product->id,
                'img'=>$publicPath
            ]);

        }


        return redirect('/home/product');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $productData = Product::with('linkProductType','linkProductImg')->find($id);
        $productTypesData = ProductType::get();
        return view('products.home_edit_products_page',compact('productData','productTypesData'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // 從資料庫找到資料
        $product = Product::find($id);
        // 取出表單所有內容
        $requestData = $request->all();
        if($request->hasFile('img')){
            // 刪除舊圖片
            File::delete(public_path().$product->img);

            // 儲存新圖片
            $file = $request->file('img');
            $path = Storage::disk('myfile')->putFile('product',$file);
            $requestData['img'] = Storage::disk('myfile')->url($path);
        }

        // 更新資料庫
        $product->update($requestData);

        // 上傳多個圖片
        $imgs = $request->file('imgs');
        foreach($imgs ?? [] as $img){
            // 存檔並取得檔案在myfile內的路徑
            $path = Storage::disk('myfile')->putFile('productImg',$img);
            // 取得檔案在public的完整路徑
            $publicPath = Storage::disk('myfile')->url($path);
            // 存到資料庫
            ProductImg::create([
                'product_id'=>$product->id,
                'img'=>$publicPath
            ]);
        
        }

        return redirect('/home/product');
    }


    public function deleteImg(Request $request)
    {
        //
        $img = ProductImg::find($request->id);
        File::delete(public_path().$img->img);
        $img->delete();
        return 'success';
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // 刪除主要圖片資料
        $product = Product::with('linkProductImg')->find($id);
        File::delete(public_path().$product->img);

        // 刪除圖片群資料庫資料
        foreach($product->linkProductImg ?? [] as $img){
            File::delete(public_path().$img->img);
            $img->delete();
        }

        $product->delete();
        return redirect('/home/product');
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
