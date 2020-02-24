<?php

namespace App\Http\Controllers;

use App\Hours;
use App\Employee;
use Illuminate\Http\Request;
use View;
class HoursController extends Controller
{
    //
    public function index(){
        return View::make('viewhours');
        $a= new Hours;
        for($i = 1,$i<3 ,$i++){
            $a->employee_id = $i;
            $a->Date = '2020-03-13';
            $a->save();
        }
        
        /*$hours = Hours::all();
        echo $hours;

        
        */
    }
    public function show(){
        $hours = Hours::all();
        $emps = Employee::all();
        
        return View::make('showhours',['hours' => $hours],['emps'=>$emps]);
    }
    public function test(){
        $hours = Hours::all();
        $emps = Employee::all();
        $empid = Hours::find(1);
        echo $empid->date->employee_id;
        return View::make('showhours',['hours' => $hours],['emps'=>$emps],['emps'=>$emps]);
    }

}
