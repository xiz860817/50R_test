<?php

namespace App\Http\Controllers;

use App\Hours;
use Illuminate\Http\Request;
use View;
class HoursController extends Controller
{
    //
    public function index(){
        return View::make('viewhours');
        
        /*$hours = Hours::all();
        echo $hours;

        $empid = Hours::find(1);
        echo $empid->date->employee_id;
        */
    }
    public function show(){
        $hours = Hours::all();
        return View::make('showhours',['hours' => $hours]);
    }

}
