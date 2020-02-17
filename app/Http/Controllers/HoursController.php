<?php

namespace App\Http\Controllers;

use App\Hours;
use Illuminate\Http\Request;

class HoursController extends Controller
{
    //
    public function index(){
        $hours = Hours::all();
        echo $hours;

        $empid = Hours::find(1);
        echo $empid->date->employrr_id;
    }
}
