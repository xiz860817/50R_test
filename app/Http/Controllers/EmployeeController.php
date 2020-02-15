<?php

namespace App\Http\Controllers;

use App\Employee;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Route;
use View;


class EmployeeController extends Controller
{
    //
    public function index(){
	$h = Employee::find(1)->hourlypay;
	return $h;
        //$h = Employee::find(1)->hourlypay;
	    //return $h;
        /*$employees = Employee::all();
        return View::make('lists',['employees'=>$employees]);*/
    }

}
