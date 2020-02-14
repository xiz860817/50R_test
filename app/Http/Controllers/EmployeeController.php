<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Route;
use View;
use App\Employee;
class EmployeeController extends Controller
{
    //
    public function index(){
        $employees = Employee::all();
        return View::make('lists',['employees'=>$employees]);
    }

}
