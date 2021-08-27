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
Route::get('/cc', function () {
    Artisan::call('cache:clear');
    echo '<script>alert("cache clear Success")</script>';
});
Route::get('/ccc', function () {
    Artisan::call('config:cache');
    echo '<script>alert("config cache Success")</script>';
});
Route::get('/vc', function () {
    Artisan::call('view:clear');
    echo '<script>alert("view clear Success")</script>';
});
Route::get('/cr', function () {
    Artisan::call('route:cache');
    echo '<script>alert("route clear Success")</script>';
});
Route::get('/coc', function () {
    Artisan::call('config:clear');
    echo '<script>alert("config clear Success")</script>';
});
Route::get('/storage123', function () {
    Artisan::call('storage:link');
    echo '<script>alert("linked")</script>';
});

//social
Route::get('/get-info-facebook/{social}', 'App\Http\Controllers\SocialController@getInfo' );
Route::get('/check-info-facebook/{social}', 'App\Http\Controllers\SocialController@callback_facebook' );


Route::get('/index', function () {
    return "hello";
});
//index
Route::get('/all', function (){
    return view('index');
})->middleware('checkLogout');
//order
Route::get('/create-order/{cartId}','App\Http\Controllers\OrderController@insert');
Route::post('/save-order','App\Http\Controllers\OrderController@save');
Route::get('/order','App\Http\Controllers\OrderController@index');
Route::get('/delete-order/{orderId}','App\Http\Controllers\OrderController@delete');

//cart
Route::get('/create-cart','App\Http\Controllers\CartController@save');
Route::get('/cart','App\Http\Controllers\CartController@index');
Route::get('/delete-cart/{cartId}','App\Http\Controllers\CartController@delete');
//user
Route::get('/login','App\Http\Controllers\UserController@login');
Route::post('/auth','App\Http\Controllers\UserController@authenticate');

//product
Route::get('/products','App\Http\Controllers\ProductController@index');
Route::get('/create-product','App\Http\Controllers\ProductController@insert');
Route::post('/save-product','App\Http\Controllers\ProductController@save');
Route::get('/delete-product/{productId}','App\Http\Controllers\ProductController@delete');
Route::get('/edit-product/{productId}','App\Http\Controllers\ProductController@edit');
Route::post('/update-product/{productId}','App\Http\Controllers\ProductController@update');

//productType
Route::get('/product-types','App\Http\Controllers\ProductTypeController@index');
Route::get('/create-product-type','App\Http\Controllers\ProductTypeController@insert');
Route::post('/save-product-type','App\Http\Controllers\ProductTypeController@save');
Route::get('/edit-product-type/{typeId}','App\Http\Controllers\ProductTypeController@edit');
Route::post('/update-product-type/{typeId}','App\Http\Controllers\ProductTypeController@update');
Route::get('/delete-product-type/{typeId}','App\Http\Controllers\ProductTypeController@delete');

//mockup
Route::get('/mockups','App\Http\Controllers\MockupController@index');
Route::get('/show-mockup/{mockupId}','App\Http\Controllers\MockupController@show');
Route::post('/render/{mockupId}','App\Http\Controllers\MockupController@render');
Route::get('/create-mockup','App\Http\Controllers\MockupController@insert');
Route::post('/save-mockup','App\Http\Controllers\MockupController@save');
Route::get('/delete-mockup/{mockupId}','App\Http\Controllers\MockupController@delete');
Route::get('/edit-mockup/{mockupId}','App\Http\Controllers\MockupController@edit');
Route::post('/update-mockup/{mockupId}','App\Http\Controllers\MockupController@update');
Route::get('/image-render/','App\Http\Controllers\MockupController@imageRender');


//mockuptype
Route::get('/mockup-types','App\Http\Controllers\MockupTypeController@index');
Route::get('/mockup-type/{typeId}','App\Http\Controllers\MockupTypeController@find');
