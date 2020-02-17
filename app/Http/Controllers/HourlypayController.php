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
<<<<<<< HEAD
        return $h;
        $s = new Hourlypay;
        $s->Hourlypay = 160;
        $s->save();
        /*$emp = Hourlypay::find(1);
        echo $emp;
        //取得員工的時數
        echo $emp->employee->Name;
        */
=======
        echo $h;

        $hh = Hourlypay::find(2);
        //echo $hh;
        //取得員工的時數
        //echo $hh->employee->Phone;
        
>>>>>>> 26ad0035df2aaa208d7cb6d15ada81aeb861c1ac
    }
}
