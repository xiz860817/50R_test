<?php

namespace App\Http\Controllers;
use App\Employee;
use App\Http\Requests\EditEmployee;
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

    public function new(){
        return View::make('new');
    }

    public function store(Request $request){
        $employees = $request->only('id','Name','Address','Phone','Hourlypay');
        dd($employees);
    }
    public function update($employee_id,EditEmployee $request){
        $employee = EmployeeEloquent::where('employee_id',$employee_id)->firstOrFail();
        $employee->Phone = $request->Phone;
        $employee->save();

        return View::make('edit',[
            'Employee' => $employee,
            'msg' => '修改成功'
        ]);
    }
}
