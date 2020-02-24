<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\VarDumper\Cloner\Data;
use App\Date;

class DateController extends Controller
{
    //
    public function index(){
        $dates = Date::all();
        echo $dates;
        $a= new Date;
        for($i = 1;$i<3 ;$i++){
            $a->employee_id = $i;
            $a->Date = '2020-03-13';
            $a->save();
        }
        //回找employee的Name
        /*$name = Date::find(1);
        echo $name->employee->Name;
        */
        //一對多找時數
        $hour = Date::find(1)->hours;
        echo $hour;
        echo "123";
        foreach ($hour as $hours){
            echo $hours->Hours;
        }

    }
}
