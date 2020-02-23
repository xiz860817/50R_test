<?php

namespace App\Http\Controllers;

use App\Hours;
use Illuminate\Http\Request;
use View;
class HoursController extends Controller
{
    //
    public function index(){
        $hours = Hours::all();
        return View::make('viewhours',['hours' => $hours]);
        
        /*$hours = Hours::all();
        echo $hours;

        $empid = Hours::find(1);
        echo $empid->date->employee_id;
        */
    }
    public function show(){
        return View::make('showhours');
    }
}
