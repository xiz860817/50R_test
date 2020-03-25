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
    return view('index');
});
Auth::routes();

//登入才能看的畫面
Route::get('login','Auth\LoginController@ahowLoginForm')->middleware('guest');

//需要登入才能進入的頁面
Route::middleware('auth')->group(function(){

    //員工新增刪除顯示資料
    Route::get('employee','EmployeeController@index');
    Route::get('new', 'EmployeeController@new');
    Route::post('store','EmployeeController@store');
    Route::get('edit','EmployeeController@edit');
    Route::post('update','EmployeeController@update');
    Route::get('delete','EmployeeController@delete');

    //查詢員工時數
    Route::get('showhours','HoursController@show');
    Route::get('date','HoursController@index');

    //刪除員工連同->相同員工編碼的日期資料庫也刪除
    Route::get('Datedelete','DateController@delete');


});

//測試
Route::get('test/create','DateController@create');
Route::get('test','DateController@store');



Route::get('/home', 'HomeController@index')->name('home');
