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

//員工新增刪除顯示資料
Route::get('employee','EmployeeController@index');
Route::get('new', 'EmployeeController@new');
Route::post('store','EmployeeController@store');
Route::get('edit','EmployeeController@edit');
Route::post('update','EmployeeController@update');
Route::get('delete','EmployeeController@delete');

//查詢員工時數

Route::get('date','HoursController@index');
