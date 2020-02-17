<?php

namespace App\Http\Controllers;

use App\Employee;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\Empty_;

class EmployeeController extends Controller
{
    //
    public function index(){
        $emps = Employee::all();
        echo $emps;

        $date = Employee::find(1)->date;
        echo $date;
        foreach ($date as $dates){
            echo $dates->Date;
        }
    }
}
