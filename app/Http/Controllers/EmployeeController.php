<?php

namespace App\Http\Controllers;
use App\Employee;
use App\Http\Requests\EditEmployee;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\Empty_;
use View;

class EmployeeController extends Controller
{
    //
    public function index(){
        $employees = Employee::all();
        return View::make('lists',['employees' => $employees]);
        /*$emps = Employee::all();
        echo $emps;

        $date = Employee::find(1)->date;
        echo $date;
        foreach ($date as $dates){
            echo $dates->Date;
        }*/
    }

    public function new(){
        return View::make('new');
    }

    public function store(Request $request){
        $employees = new Employee;
        #$employees->Cusid=$request->input('Cusid');
        $employees->Name=$request->input('Name');
        $employees->Address=$request->input('Address');
        $employees->Phone=$request->input('Phone');
        $employees->Hourlypay=$request->input('Hourlypay');
        $employees->save();
        return redirect('employee');
    }

    public function edit(Request $request){
        return View::make('edit',['id'=>$request->id,'Name'=>$request->Name,'Address'=>$request->Address,'Phone'=>$request->Phone,'Hourlypay'=>$request->Hourlypay]);
    }
    /*public function update($employee_id,EditEmployee $request){
        $employee = EmployeeEloquent::where('employee_id',$employee_id)->firstOrFail();
        $employee->Phone = $request->Phone;
        $employee->save();

        return View::make('edit',[
            'Employee' => $employee,
            'msg' => '修改成功'
        ]);
    }*/
    public function update(Request $request){
        if ($request->cancel){
            $employees = Employee::all();
            return View::make('lists',['employees'=>$employees]);
        }
        $employees = Employee::where('id',$request->input('oldId'))
                                    ->update(['id'=>$request->input('id'),
                                    'Name'=>$request->input('Name'),
                                    'Address'=>$request->input('Address'),
                                    'Phone'=>$request->input('Phone'),
                                    'Hourlypay'=>$request->input('Hourlypay'
                                    )]);
        $employees = Employee::all();
        return View::make('lists',['employees'=>$employees]);
    }
}
