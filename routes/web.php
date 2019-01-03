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
Route::get('post',  ['as' => 'posts.show',    'uses' => 'PostsController@postold']);
Route::get('about',    ['as' => 'posts.about',   'uses' => 'PostsController@about']);
Route::get('contact',  ['as' => 'posts.contact', 'uses' => 'PostsController@contact']);
Route::get('booking',  ['as' => 'posts.booking',  'uses' => 'PostsController@booking']);
Route::get('review',  ['as' => 'posts.review',  'uses' => 'PostsController@review']);
/*Route::get('postold',  ['as' => 'posts.postold',  'uses' => 'PostsController@postold']);*/

/*貼文*/
Route::get('post1',  ['as'=>'posts.post1','uses' => 'PostsController@post1']);
Route::get('post1',  ['as'=>'posts.post1','uses' => 'PostsController@post1']);

/*快速訂房*/
/*-沒用到*/
Route::get('chooseroom',  ['as'=>'booking.chooseroom','uses' => 'BookingController@index']);
/*-沒用到*/
Route::post('store',['as'=>'booking.store','uses' => 'BookingController@store']);
/*-沒用到*/
Route::post('store2',['as'=>'booking.store2','uses' => 'BookingController@store2']);

/*快速訂房*/
Route::get('time',['as'=>'booking.time','uses'=>'BookingController@time']);
Route::get('room',['as'=>'booking.room','uses'=>'BookingController@room']);
Route::get('check',['as'=>'booking.check','uses'=>'BookingController@check']);
Route::post('final',['as'=>'booking.final','uses'=>'BookingController@final']);

/*房型介紹-各房間*/
/*Route::get('roomdetail',  ['as' => 'roomdetail',  'uses' => 'RoomDetailController@index']);*/
Route::get('room1',  ['as' => 'room1',  'uses' => 'RoomDetailController@room1']);
Route::get('room2',  ['as' => 'room2',  'uses' => 'RoomDetailController@room2']);
Route::get('room3',  ['as' => 'room3',  'uses' => 'RoomDetailController@room3']);
Route::get('room4',  ['as' => 'room4',  'uses' => 'RoomDetailController@room4']);
Route::get('room5',  ['as' => 'room5',  'uses' => 'RoomDetailController@room5']);
Route::get('room6',  ['as' => 'room6',  'uses' => 'RoomDetailController@room6']);

/*行程規劃各分頁*/
Route::get('2DayPlan',  [ 'as' => 'plan.2day','uses' => 'TripPlanController@twoDay']);
Route::get('1DayPlan', [ 'as' => 'plan.1day', 'uses' => 'TripPlanController@oneDay']);
Route::get('3DayPlan',    [ 'as' => 'plan.3day', 'uses' => 'TripPlanController@threeDay']);
Route::get('4DayPlan',  ['as' => 'plan.4day', 'uses' => 'TripPlanController@fourDay']);
Route::get('1DayPlanA',  ['as' => '1DayPlanA', 'uses' => 'TripPlanController@oneDayA']);
Route::get('1DayPlanB',  ['as' => '1DayPlanB', 'uses' => 'TripPlanController@oneDayB']);
Route::get('1DayPlanC',  ['as' => '1DayPlanC', 'uses' => 'TripPlanController@oneDayC']);

Route::get('2DayPlanA',  ['as' => '2DayPlanA', 'uses' => 'TripPlanController@twoDayA']);
Route::get('2DayPlanB',  ['as' => '2DayPlanB', 'uses' => 'TripPlanController@twoDayB']);
Route::get('2DayPlanC',  ['as' => '2DayPlanC', 'uses' => 'TripPlanController@twoDayC']);

Route::get('ViewPoint1吉貝',  ['as' => 'ViewPoint1', 'uses' => 'TripPlanController@ViewPoint1']);
Route::get('ViewPoint2白沙',  ['as' => 'ViewPoint2', 'uses' => 'TripPlanController@ViewPoint2']);
Route::get('ViewPoint3七美',  ['as' => 'ViewPoint3', 'uses' => 'TripPlanController@ViewPoint3']);
Route::get('ViewPoint4南環',  ['as' => 'ViewPoint4', 'uses' => 'TripPlanController@ViewPoint4']);
Route::get('ViewPoint5望安',  ['as' => 'ViewPoint5', 'uses' => 'TripPlanController@ViewPoint5']);
Route::get('ViewPoint6湖西',  ['as' => 'ViewPoint6', 'uses' => 'TripPlanController@ViewPoint6']);
Route::get('ViewPoint6西嶼',  ['as' => 'ViewPoint7', 'uses' => 'TripPlanController@ViewPoint7']);

/*登入，auth驗證等等......*/
Auth::routes();
Route::get('logout', 'Auth\LoginController@logout');
Route::get('/home', 'HomeController@index')->name('home');


/*後台*/
Route::group(['prefix' => 'admin'], function() {
    Route::get('/', 'HomeController@show');
    Route::get('booking', ['as' => 'admin.booking.index', 'uses' => 'AdminBookingController@index']);
    Route::get('booking/{id}/edit'   , ['as' => 'admin.booking.edit', 'uses' => 'AdminBookingController@edit']);
    Route::post('booking', ['as' => 'admin.booking.store', 'uses' => 'AdminBookingController@store']);
    Route::patch('booking/{id}', ['as' => 'admin.booking.update', 'uses' => 'AdminBookingController@update']);
    Route::delete('booking/{id}', ['as' => 'admin.booking.destroy', 'uses' => 'AdminBookingController@destroy']);
});
