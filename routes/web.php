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



// news news news news news news news news news news news news news news news news news news news news news news news news news news news news news news news news news //


// 顯示首頁

// Route::get('/', function () {
//     return view('index');
// });

Route::view('/', 'index');       // 縮寫 view 預設本來就是 get

Route::post('/contact_us','ContactUsController@store');



// 前端畫面
// News Front Controller
Route::prefix('/news')->group(function (){

    // 顯示內頁
    Route::get('/','NewsFrontController@index');
    
    // 顯示內頁資料
    Route::get('/detail/{id}','NewsFrontController@detail');
   
});



// 後台畫面
// News Controller
Route::prefix('/home')->group(function (){

    // 顯示內頁
    Route::get('/','HomeController@index');
    
    // 登入需求
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
        Route::put('/update/{id}','NewsController@update');
        
        // 刪除資料
        Route::get('/delete/{id}','NewsController@delete');

        // 後台顯示表單資料
        Route::get('/editNewsTable','NewsController@editNewsTable');
    });
    
   
});



// product product product product product product product product product product product product product product product product product product product product product //


// 前端畫面
// Product Front Controller
Route::get('/product','ProductFrontController@index');

// 後台畫面
Route::prefix('/home')->group(function (){

    // 顯示內頁
    Route::get('/','HomeController@index');
    
    // 登入需求
    Route::middleware('auth')->group(function(){

        // Product Resource Controller
        Route::resource('/product', 'ProductResourceController');
        Route::post('/product/deleteImg', 'ProductResourceController@deleteImg');

        // Product Tool Box Controller
        Route::prefix('/summernote')->group(function() {
            Route::POST('/store','ProductToolBoxController@summernoteStore');
        });
        
    });
       
});


// Product Resource_Type Controller
Route::prefix('/home/product')->group(function (){
    Route::resource('/product_type', 'ProductResourceTypeController');
});






// ShoppingCart ShoppingCart ShoppingCart ShoppingCart ShoppingCart ShoppingCart ShoppingCart ShoppingCart ShoppingCart ShoppingCart ShoppingCart ShoppingCart ShoppingCart ShoppingCart //



// 前端畫面
// Shopping Cart Front Controller
Route::prefix('/shopping_cart')->group(function (){
    Route::post('/add', 'ShoppingCartFrontController@add');

    // 登入需求
    Route::middleware('auth','cartCheck')->group(function(){
        Route::post('/update', 'ShoppingCartFrontController@update');
        Route::post('/delete', 'ShoppingCartFrontController@delete');
        Route::get('/content', 'ShoppingCartFrontController@content');
        Route::get('/list_1', 'ShoppingCartFrontController@list');
        Route::get('/payment_2', 'ShoppingCartFrontController@payment');
        Route::post('/payment_2/check', 'ShoppingCartFrontController@paymentCheck');
        Route::post('/information_3/check', 'ShoppingCartFrontController@informationCheck');
    });
    
});












// test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test //


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


// ECPay ECPay ECPay ECPay ECPay ECPay ECPay ECPay ECPay ECPay ECPay ECPay ECPay ECPay ECPay ECPay ECPay ECPay ECPay ECPay ECPay ECPay ECPay ECPay ECPay ECPay ECPay ECPay ECPay ECPay ECPay ECPay //

// 綠界金流

Route::prefix('cart_ecpay')->group(function(){
    //當消費者付款完成後，綠界會將付款結果參數以幕後(Server POST)回傳到該網址。
    Route::post('notify', 'ShoppingCartFrontController@notifyUrl')->name('notify');

    //付款完成後，綠界會將付款結果參數以幕前(Client POST)回傳到該網址
    Route::post('return', 'ShoppingCartFrontController@returnUrl')->name('return');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
