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
        return $h;

        $emp = Hourlypay::find(1);
        //取得員工的時數
        
        echo $emp->employee->Name;
        
    }
}
