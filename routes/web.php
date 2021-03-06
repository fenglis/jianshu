<?php

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

Route::get('/', function () {
    return view('welcome');
});

//支持所有的http方法
//Route::any('/posts', '\App\Http\Controllers\Postcontroller@index');

//只支持get和post方法
//Route::match(['get', 'post'],'/posts', '\App\Http\Controllers\Postcontroller@index');

//Route::get('/posts', '\App\Http\Controllers\Postcontroller@index');

//文章模块路由
Route::get('/posts', '\App\Http\Controllers\PostController@index'); //文章列表
Route::get('/posts/create', '\App\Http\Controllers\PostController@create'); //添加展示
Route::post('/posts', '\App\Http\Controllers\PostController@store'); //添加文章行为
Route::get('/posts/{post}', '\App\Http\Controllers\PostController@show'); //文章详情
//编辑方法
Route::get('/posts/{post}/edit', '\App\Http\Controllers\PostController@edit');
Route::put('/posts/{post}', '\App\Http\Controllers\PostController@update');
//删除文章
Route::get('/posts/{post}/delete', '\App\Http\Controllers\PostController@delete');
//图片上传
Route::post('/posts/image/upload', '\App\Http\Controllers\PostController@imageUpload');
