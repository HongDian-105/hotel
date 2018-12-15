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

/*各分頁*/
Route::get('posts', ['as' => 'posts.index',   'uses' => 'PostsController@index']);
Route::get('post',  ['as' => 'posts.show',    'uses' => 'PostsController@show']);
Route::get('about',    ['as' => 'posts.about',   'uses' => 'PostsController@about']);
Route::get('contact',  ['as' => 'posts.contact', 'uses' => 'PostsController@contact']);
Route::get('booking',  ['as' => 'posts.booking',  'uses' => 'PostsController@booking']);
Route::get('review',  ['as' => 'posts.review',  'uses' => 'PostsController@review']);

/*快速訂房*/
Route::get('see',  ['as'=>'booking.see','uses' => 'BookingController@see']);
Route::post('store',['as'=>'booking.store','uses' => 'BookingController@store']);

/*房型介紹-各房間*/
Route::get('/001', function () {return view('小管房');});
Route::get('/002', function () {return view('土魠房');});
Route::get('/003', function () {return view('石斑房');});
Route::get('/004', function () {return view('紅魽房');});
Route::get('/005', function () {return view('花枝丸房');});
Route::get('/006', function () {return view('垵米房');});