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
        $hourlypays = Employee::find(1)->hourlypay;
        foreach ($hourlypays as $hourly){
            echo $hourly->hourlypay;
        }
        $employees = Employee::all();
        return View::make('lists',['employees'=>$employees]);
    }

}
