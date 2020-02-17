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
        return $dates;
    }
}
