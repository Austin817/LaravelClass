<?php

namespace App\Http\Controllers;

use App\Product;
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

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        $productData = $request->all();

        if($request->hasFile('img')) {
            $file = $request->all();
            $path = Storage::disk('myfile')->putFile('product',$file);
            $productData['img'] = Storage::disk('myfile')->url($path);
        }

        Product::create($productData);

        return redirect('/product');

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
        //
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
            $file = $request->all('img');
            $path = Storage::disk('myfile')->putFile('product',$file);
            $productData['img'] = Storage::disk('myfile')->url($path);
        }

        // 更新資料庫
        $product->update($requestData);
        return redirect('/product');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $product = Product::find($id);
        File::delete(public_path().$product->img);
        $product->delete();
        return redirect('/product');
    }
}
