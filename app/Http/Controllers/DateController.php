<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\VarDumper\Cloner\Data;
use App\Date;

class DateController extends Controller
{
    //
    public function index(){
        //$dates = Date::all();
        //echo $dates;
        $date = new Date();
        $date->employee_id = "7";
        $date->Date = "2020-04-01";
        $date->save();
        $date = new Date();
        $date->employee_id = "8";
        $date->Date = "2020-05-01";
        $date->save();
        $date = new Date();
        $date->employee_id = "9";
        $date->Date = "2020-09-30";
        $date->save();
        $date = new Date();
        $date->employee_id = "10";
        $date->Date = "2020-04-13";
        $date->save();
        $date = new Date();
        $date->employee_id = "11";
        $date->Date = "2020-04-01";
        $date->save();
        }
        //回找employee的Name
        /*$name = Date::find(1);
        echo $name->employee->Name;
        */
        //一對多找時數
        //$hour = Date::find(1)->hours;
        //echo $hour;
        //echo "123";
        //foreach ($hour as $hours){
            //echo $hours->Hours;
        //}
        public function delete(Request $request){
            $dates = Date::where('employee_id',$request->input('employee_id'))
            ->delete(['id'=>$request->input('id'),
	    'employee_id'=>$request->input('employee_id'),
	    'Date'=>$request->input('Date')]);
        }
}

