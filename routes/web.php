<?php

use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
//     return view('index');
// });

Route::view('/', 'index');  // 縮寫 view 預設本來就是 get

Route::prefix('/news')->group(function (){

    // 顯示內頁
    Route::get('/','NewsController@index');
    
    // 顯示內頁資料
    Route::get('/detail/{id}','NewsController@detail');
   
});


Route::prefix('/home')->group(function (){

    // 顯示內頁
    Route::get('/','HomeController@index');
    

    Route::middleware('auth')->group(function(){

        // 新增頁面資料(預設)
        Route::get('/createUnset/{title}','NewsController@createUnset');
        
        // 新增頁面資料
        Route::get('/create','NewsController@create');
        
        // 儲存資料
        Route::post('/store','NewsController@store');
        
        // 編輯資料
        Route::get('/edit/{id}','NewsController@edit');
        
        // 更新資料
        Route::post('/update/{id}','NewsController@update');
        
        // 刪除資料
        Route::get('/delete/{id}','NewsController@delete');

        // 後台顯示表單資料
        Route::get('/editNewsTable','NewsController@editNewsTable');
    });
    
   
});

Route::resource('admin', 'NewsResourceController');







Route::get('/test',function(){

    // $data = '123';
    // return view('test',['abc' => $data]);

    $data1 = '123';
    $data2 = '456';
    $data3 = '789';

    return view('test',compact('data1','data2','data3'));
});

Route::get('/lesson1',function(){

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
