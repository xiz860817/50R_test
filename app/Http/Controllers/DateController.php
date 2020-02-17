<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\VarDumper\Cloner\Data;
use App\Date;
class DateController extends Controller
{
    //
    public function index(){
        $date = new Date;
        $date->employee_id = '1';
        $date->Date = '2020-02-17';
        $date->save();
        $dates = Date::all();
        return $dates;
    }
}
