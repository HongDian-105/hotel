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

/*行程規劃各分頁*/
Route::get('2DayPlan',  [ 'as' => 'plan.2day','uses' => 'TripPlanController@twoDay']);
Route::get('1DayPlan', [ 'as' => 'plan.1day', 'uses' => 'TripPlanController@oneDay']);
Route::get('3DayPlan',    [ 'as' => 'plan.3day', 'uses' => 'TripPlanController@threeDay']);
Route::get('4DayPlan',  ['as' => 'plan.4day', 'uses' => 'TripPlanController@fourDay']);
Route::get('1DayPlanA',  ['as' => '1DayPlanA', 'uses' => 'TripPlanController@oneDayA']);
Route::get('1DayPlanB',  ['as' => '1DayPlanB', 'uses' => 'TripPlanController@oneDayB']);
Route::get('1DayPlanC',  ['as' => '1DayPlanC', 'uses' => 'TripPlanController@oneDayC']);

Route::get('ViewPoint1吉貝',  ['as' => 'ViewPoint1', 'uses' => 'TripPlanController@ViewPoint1']);
Route::get('ViewPoint2白沙',  ['as' => 'ViewPoint2', 'uses' => 'TripPlanController@ViewPoint2']);
Route::get('ViewPoint3七美',  ['as' => 'ViewPoint3', 'uses' => 'TripPlanController@ViewPoint3']);
Route::get('ViewPoint4南環',  ['as' => 'ViewPoint4', 'uses' => 'TripPlanController@ViewPoint4']);
Route::get('ViewPoint5望安',  ['as' => 'ViewPoint5', 'uses' => 'TripPlanController@ViewPoint5']);
Route::get('ViewPoint6湖西',  ['as' => 'ViewPoint6', 'uses' => 'TripPlanController@ViewPoint6']);
Route::get('ViewPoint6西嶼',  ['as' => 'ViewPoint7', 'uses' => 'TripPlanController@ViewPoint7']);
Route::get('/007', function () {return view('一日遊方案一');});
Route::get('/008', function () {return view('一日遊方案二');});
Route::get('/009', function () {return view('一日遊方案三');});
