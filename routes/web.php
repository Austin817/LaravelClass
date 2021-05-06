<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// 顯示首頁
Route::get('/', function () {
    return view('index');
});

// 顯示內頁
Route::get('/news','NewsController@index');

// 顯示內頁資料
Route::get('/news/detail/{id}','NewsController@detail');

// 新增頁面資料
Route::get('/news/create','NewsController@create');

// 新增頁面資料(預設)
Route::get('/news/createUnset/{title}','NewsController@createUnset');

// 儲存資料
Route::post('/news/store','NewsController@store');

// 更新資料
Route::get('/news/update/{id}/{title}','NewsController@update');

// 刪除資料
Route::get('/news/delete/{id}','NewsController@delete');



   








Route::get('test',function(){

    // $data = '123';
    // return view('test',['abc' => $data]);

    $data1 = '123';
    $data2 = '456';
    $data3 = '789';

    return view('test',compact('data1','data2','data3'));
});

Route::get('lesson1',function(){

    // $變數名稱
    // =指派運算子

    // $data = 'abc';
    // 字串 string

    // $data = '123';
    // 整數 integer

    // $data = '123.1';
    // 浮點數 double

    // $data = [];
    // 陣列 array

    $data = ['a' => 123,'b' => 456];  //陣列中的物件 'a' 鍵 , 123 值 , => 分隔(取代 : )

    $num1 = 1;
    $num2 = 2;

    // 算術運算子 + - * / ** %
    // 字串運算子 . (字串相加用，非 + )
    // 比較運算子 > < >= <= == !== <>
    // 邏輯運算子 && || ! and or xor

    dd($num1.$num2,$num1+$num2,gettype($data),$data,$data['a'],$data['b']);

    // if(){}
    // elseif(){}
    // else;

    return 'hello world!';
});
