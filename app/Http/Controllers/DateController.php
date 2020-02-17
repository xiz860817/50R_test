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

        $name = Date::find(1);
        echo $name->employee->Name;

        $hour = Date::find(1)->date;
        foreach ($hour as $hours){
            echo $hours->Hours;
        }
    }
}
