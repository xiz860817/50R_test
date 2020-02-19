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

Route::get('employee','EmployeeController');
Route::get('new', 'EmployeeController@new');
Route::post('store','EmployeeController@store');

Route::resource('date','DateController');
Route::resource('new','HoursController');

Route::get('edit/{employee_id}','EmployeeController@edit');
Route::post('edit/{employee_id}', 'EmployeeController@update');