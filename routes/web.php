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

Route::get('employee','EmployeeController@index');
Route::get('new', 'EmployeeController@new');
Route::post('store','EmployeeController@store');
Route::get('edit','EmployeeController@edit');
Route::post('update','EmployeeController@update');
Route::get('delete','CustomerController@delete');

Route::resource('date','DateController');
Route::resource('new1','HoursController');

#Route::get('edit/{employee_id}','EmployeeController@edit');
#Route::post('edit/{employee_id}', 'EmployeeController@update');