<?php

namespace App\Http\Controllers;

use App\Hourlypay;
use Illuminate\Http\Request;

class HourlypayController extends Controller
{
    //
    public function index(){
        //
        $h = Hourlypay::all();
        echo $h;
        $s = new Hourlypay;
        $s->hourlypay = 160;
        $s->save();
        /*$emp = Hourlypay::find(1);
        echo $emp;
        //取得員工的時數
        echo $emp->employee->Name;
        */
    }
}
