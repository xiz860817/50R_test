<?php

namespace App\Http\Controllers;

use App\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    //
    public function index(){
        $emp = new Employee;
        $emp->Name = "peter";
        $emp->Address = 'Load.10';
        $emp->Phone = '0987654321';
        $emp->Hourlypay = 158;
        $emp->save();
        $emps = Employee::all();
        return $emps;
    }
}
